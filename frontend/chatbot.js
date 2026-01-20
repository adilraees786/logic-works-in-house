
(function() {
  'use strict';
  console.log("Chatbot script executing...");

  // Configuration - Logic Works Chatbot
  const CONFIG = {
    // Dynamic URLs using base_url from PHP
    apiUrl: (window.LW_CHAT_BASE_URL || '/') + 'backend/chat.php',
    streamUrl: (window.LW_CHAT_BASE_URL || '/') + 'backend/chat-stream.php',
    botName: 'Logic Works AI',
    botInitial: 'LW',
    welcomeMessage: 'Hi! I\'m here to help you learn about Logic Works services. How can I assist you today?',
    quickQuestions: [
      'What services do you offer?',
      'Do you build mobile apps?',
      'How much does a website cost?',
      'Do you provide SEO services?'
    ],
    errorMessage: 'Sorry, something went wrong. Please try again.',
    maxRetries: 3,
    useStreaming: true, // Enable/disable streaming
    streamingDelay: 20 // Delay between characters for smooth animation (ms)
  };

  // State
  let chatState = {
    isOpen: false,
    conversationHistory: [],
    isTyping: false,
    retryCount: 0,
    currentStreamController: null,
    currentMessageElement: null
  };

  // Create chatbot HTML
  function createChatbotHTML() {
    const chatbotHTML = `
      <!-- Chatbot Button -->
      <button id="lw-chatbot-button" aria-label="Open chat">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
        </svg>
      </button>

      <!-- Chatbot Window -->
      <div id="lw-chatbot-window" role="dialog" aria-labelledby="lw-chatbot-title" aria-hidden="true">
        <!-- Header -->
        <div id="lw-chatbot-header">
          <div id="lw-chatbot-header-content">
            <div id="lw-chatbot-avatar">${CONFIG.botInitial}</div>
            <div id="lw-chatbot-header-text">
              <h3 id="lw-chatbot-title">${CONFIG.botName}</h3>
              <p id="lw-chatbot-status">Online • Typically replies instantly</p>
            </div>
          </div>
          <button id="lw-chatbot-close" aria-label="Close chat">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <line x1="18" y1="6" x2="6" y2="18"></line>
              <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
          </button>
        </div>

        <!-- Messages -->
        <div id="lw-chatbot-messages" role="log" aria-live="polite"></div>

        <!-- Input Area -->
        <div id="lw-chatbot-input-area">
          <textarea 
            id="lw-chatbot-input" 
            placeholder="Type your message..." 
            rows="1"
            aria-label="Message input"
          ></textarea>
          <button id="lw-chatbot-send" aria-label="Send message" disabled>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
            </svg>
          </button>
        </div>

        <!-- Footer -->
        <div id="lw-chatbot-footer">
          Powered by <a href="https://salmanwaria.com" target="_blank" rel="noopener noreferrer">Logic Works</a>
        </div>
      </div>
    `;

    document.body.insertAdjacentHTML('beforeend', chatbotHTML);
  }

  // Initialize welcome message
  function showWelcomeMessage() {
    const messagesContainer = document.getElementById('lw-chatbot-messages');
    const welcomeHTML = `
      <div class="lw-welcome-message">
        <h4>👋 Welcome!</h4>
        <p>${escapeHtml(CONFIG.welcomeMessage)}</p>
        <div class="lw-quick-questions">
          ${CONFIG.quickQuestions.map(q => 
            `<button class="lw-quick-question-btn" data-question="${escapeHtml(q)}">${escapeHtml(q)}</button>`
          ).join('')}
        </div>
      </div>
    `;
    messagesContainer.innerHTML = welcomeHTML;

    // Add event listeners to quick question buttons
    const quickBtns = messagesContainer.querySelectorAll('.lw-quick-question-btn');
    quickBtns.forEach(btn => {
      btn.addEventListener('click', function() {
        const question = this.getAttribute('data-question');
        document.getElementById('lw-chatbot-input').value = question;
        sendMessage();
      });
    });
  }

  // Update status
  function updateStatus(status) {
    const statusElement = document.getElementById('lw-chatbot-status');
    if (statusElement) {
      statusElement.textContent = status;
    }
  }

  // Add message to chat
  function addMessage(content, isUser = false) {
    const messagesContainer = document.getElementById('lw-chatbot-messages');
    
    // Remove welcome message if exists
    const welcomeMsg = messagesContainer.querySelector('.lw-welcome-message');
    if (welcomeMsg) {
      welcomeMsg.remove();
    }

    const time = new Date().toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit' });
    const messageHTML = `
      <div class="lw-message ${isUser ? 'user' : 'assistant'}">
        <div class="lw-message-avatar">${isUser ? 'U' : CONFIG.botInitial}</div>
        <div>
          <div class="lw-message-content">${isUser ? escapeHtml(content) : content}</div>
          <div class="lw-message-time">${time}</div>
        </div>
      </div>
    `;

    messagesContainer.insertAdjacentHTML('beforeend', messageHTML);
    scrollToBottom();
  }

  // Create empty assistant message for streaming
  function createStreamingMessage() {
    const messagesContainer = document.getElementById('lw-chatbot-messages');
    
    // Remove welcome message if exists
    const welcomeMsg = messagesContainer.querySelector('.lw-welcome-message');
    if (welcomeMsg) {
      welcomeMsg.remove();
    }

    const time = new Date().toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit' });
    const messageHTML = `
      <div class="lw-message assistant" id="lw-streaming-message">
        <div class="lw-message-avatar">${CONFIG.botInitial}</div>
        <div>
          <div class="lw-message-content lw-streaming-content">
            <span class="lw-cursor">▋</span>
          </div>
          <div class="lw-message-time">${time}</div>
        </div>
      </div>
    `;

    messagesContainer.insertAdjacentHTML('beforeend', messageHTML);
    scrollToBottom();

    const messageElement = messagesContainer.querySelector('#lw-streaming-message .lw-message-content');
    chatState.currentMessageElement = messageElement;
    return messageElement;
  }

  // Append to streaming message
  function appendToStreamingMessage(content) {
    if (!chatState.currentMessageElement) return;

    // Remove cursor if exists
    const cursor = chatState.currentMessageElement.querySelector('.lw-cursor');
    if (cursor) cursor.remove();

    // Append content (escaped for safety)
    const textNode = document.createTextNode(content);
    chatState.currentMessageElement.appendChild(textNode);

    // Add cursor back
    const newCursor = document.createElement('span');
    newCursor.className = 'lw-cursor';
    newCursor.textContent = '▋';
    chatState.currentMessageElement.appendChild(newCursor);

    scrollToBottom();
  }

  // Finalize streaming message
  function finalizeStreamingMessage() {
    if (!chatState.currentMessageElement) return;

    // Remove cursor
    const cursor = chatState.currentMessageElement.querySelector('.lw-cursor');
    if (cursor) cursor.remove();

    // Remove streaming class
    chatState.currentMessageElement.classList.remove('lw-streaming-content');

    // Remove streaming message ID
    const streamingMsg = document.getElementById('lw-streaming-message');
    if (streamingMsg) {
      streamingMsg.removeAttribute('id');
    }

    chatState.currentMessageElement = null;
  }

  // Show typing indicator
  function showTypingIndicator() {
    const messagesContainer = document.getElementById('lw-chatbot-messages');
    const typingHTML = `
      <div class="lw-message assistant" id="lw-typing">
        <div class="lw-message-avatar">${CONFIG.botInitial}</div>
        <div class="lw-typing-indicator">
          <div class="lw-typing-dot"></div>
          <div class="lw-typing-dot"></div>
          <div class="lw-typing-dot"></div>
        </div>
      </div>
    `;
    messagesContainer.insertAdjacentHTML('beforeend', typingHTML);
    scrollToBottom();
  }

  // Remove typing indicator
  function removeTypingIndicator() {
    const typing = document.getElementById('lw-typing');
    if (typing) typing.remove();
  }

  // Show error message
  function showErrorMessage(message = CONFIG.errorMessage) {
    const messagesContainer = document.getElementById('lw-chatbot-messages');
    const errorHTML = `
      <div class="lw-error-message" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <circle cx="12" cy="12" r="10"></circle>
          <line x1="12" y1="8" x2="12" y2="12"></line>
          <line x1="12" y1="16" x2="12.01" y2="16"></line>
        </svg>
        <span>${escapeHtml(message)}</span>
      </div>
    `;
    messagesContainer.insertAdjacentHTML('beforeend', errorHTML);
    scrollToBottom();
  }

  // Send message with streaming
  async function sendMessageStreaming(message) {
    updateStatus('Typing...');
    createStreamingMessage();

    let fullResponse = '';

    try {
      const response = await fetch(CONFIG.streamUrl, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          message: message,
          history: chatState.conversationHistory
        })
      });

      if (!response.ok) {
        throw new Error('Network response was not ok');
      }

      const reader = response.body.getReader();
      const decoder = new TextDecoder();
      let buffer = '';

      while (true) {
        const { done, value } = await reader.read();
        
        if (done) break;

        buffer += decoder.decode(value, { stream: true });
        const lines = buffer.split('\n');
        buffer = lines.pop() || '';

        for (const line of lines) {
          if (line.startsWith('data: ')) {
            const data = line.slice(6);
            
            if (data === '[DONE]') continue;

            try {
              const parsed = JSON.parse(data);

              if (parsed.type === 'content') {
                fullResponse += parsed.content;
                appendToStreamingMessage(parsed.content);
              } else if (parsed.type === 'error') {
                throw new Error(parsed.message);
              } else if (parsed.type === 'done') {
                fullResponse = parsed.fullMessage || fullResponse;
              }
            } catch (e) {
              if (e instanceof SyntaxError) {
                console.error('JSON parse error:', e);
              } else {
                throw e;
              }
            }
          }
        }
      }

      finalizeStreamingMessage();
      chatState.conversationHistory.push({ role: 'assistant', content: fullResponse });
      chatState.isTyping = false;
      chatState.retryCount = 0;
      updateStatus('Online • Typically replies instantly');

    } catch (error) {
      console.error('Streaming error:', error);
      finalizeStreamingMessage();
      
      const streamingMsg = document.getElementById('lw-streaming-message');
      if (streamingMsg) streamingMsg.remove();

      chatState.isTyping = false;

      if (chatState.retryCount < CONFIG.maxRetries) {
        chatState.retryCount++;
        showErrorMessage('Connection issue. Retrying...');
        updateStatus('Retrying...');
        setTimeout(() => sendMessageRetry(message), 1000);
      } else {
        showErrorMessage(CONFIG.errorMessage + ' Please refresh and try again.');
        chatState.retryCount = 0;
        updateStatus('Online • Typically replies instantly');
      }
    }
  }

  // Send message without streaming (fallback)
  async function sendMessageNonStreaming(message) {
    showTypingIndicator();
    updateStatus('Typing...');

    try {
      const response = await fetch(CONFIG.apiUrl, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          message: message,
          history: chatState.conversationHistory
        })
      });

      const data = await response.json();

      removeTypingIndicator();
      chatState.isTyping = false;

      if (data.success && data.message) {
        addMessage(escapeHtml(data.message), false);
        chatState.conversationHistory.push({ role: 'assistant', content: data.message });
        chatState.retryCount = 0;
        updateStatus('Online • Typically replies instantly');
      } else {
        throw new Error(data.error || 'Unknown error');
      }
    } catch (error) {
      console.error('Chat error:', error);
      removeTypingIndicator();
      chatState.isTyping = false;

      if (chatState.retryCount < CONFIG.maxRetries) {
        chatState.retryCount++;
        showErrorMessage('Connection issue. Retrying...');
        updateStatus('Retrying...');
        setTimeout(() => sendMessageRetry(message), 1000);
      } else {
        showErrorMessage(CONFIG.errorMessage + ' Please refresh and try again.');
        chatState.retryCount = 0;
        updateStatus('Online • Typically replies instantly');
      }
    }
  }

  // Send message (chooses streaming or non-streaming)
  async function sendMessage() {
    const input = document.getElementById('lw-chatbot-input');
    const sendBtn = document.getElementById('lw-chatbot-send');
    const message = input.value.trim();

    if (!message || chatState.isTyping) return;

    // Add user message
    addMessage(message, true);
    chatState.conversationHistory.push({ role: 'user', content: message });

    // Clear input
    input.value = '';
    input.style.height = 'auto';
    sendBtn.disabled = true;

    chatState.isTyping = true;

    // Choose streaming or non-streaming
    if (CONFIG.useStreaming) {
      await sendMessageStreaming(message);
    } else {
      await sendMessageNonStreaming(message);
    }
  }

  // Retry sending message
  async function sendMessageRetry(message) {
    chatState.conversationHistory.pop(); // Remove failed user message
    document.getElementById('lw-chatbot-input').value = message;
    await sendMessage();
  }

  // Scroll to bottom
  function scrollToBottom() {
    const messagesContainer = document.getElementById('lw-chatbot-messages');
    messagesContainer.scrollTop = messagesContainer.scrollHeight;
  }

  // Escape HTML to prevent XSS
  function escapeHtml(text) {
    const map = {
      '&': '&amp;',
      '<': '&lt;',
      '>': '&gt;',
      '"': '&quot;',
      "'": '&#039;'
    };
    return String(text).replace(/[&<>"']/g, m => map[m]);
  }

  // Toggle chatbot
  function toggleChatbot(forceState) {
    const chatWindow = document.getElementById('lw-chatbot-window');
    const chatButton = document.getElementById('lw-chatbot-button');
    const chatInput = document.getElementById('lw-chatbot-input');

    // Determine new state: if forceState is provided use it, otherwise flip current state
    const newState = (typeof forceState === 'boolean') ? forceState : !chatState.isOpen;
    
    console.log("Chatbot Toggle: Current State =", chatState.isOpen, "| Targeting State =", newState);

    if (newState === chatState.isOpen && typeof forceState !== 'boolean') {
        console.warn("Chatbot already in requested state, skipping toggle.");
        return;
    }

    chatState.isOpen = newState;

    if (chatState.isOpen) {
      chatWindow.classList.add('open');
      chatWindow.setAttribute('aria-hidden', 'false');
      chatButton.classList.add('active');
      
      // Delay focus slightly to ensure window is visible for browser accessibility
      setTimeout(() => {
        if (chatState.isOpen) chatInput.focus();
      }, 100);
    } else {
      chatWindow.classList.remove('open');
      chatWindow.setAttribute('aria-hidden', 'true');
      chatButton.classList.remove('active');
      // Remove focus from input when closing
      chatInput.blur();
    }
  }

  // Auto-resize textarea
  function autoResizeTextarea(textarea) {
    textarea.style.height = 'auto';
    textarea.style.height = Math.min(textarea.scrollHeight, 120) + 'px';
  }

  // Initialize chatbot
  function initChatbot() {
    createChatbotHTML();
    showWelcomeMessage();

    // Event listeners
    const chatButton = document.getElementById('lw-chatbot-button');
    const closeButton = document.getElementById('lw-chatbot-close');
    const sendButton = document.getElementById('lw-chatbot-send');
    const input = document.getElementById('lw-chatbot-input');

    chatButton.addEventListener('click', toggleChatbot);
    closeButton.addEventListener('click', toggleChatbot);
    sendButton.addEventListener('click', sendMessage);

    // Input handling
    input.addEventListener('input', function() {
      autoResizeTextarea(this);
      sendButton.disabled = !this.value.trim();
    });

    input.addEventListener('keydown', function(e) {
      if (e.key === 'Enter' && !e.shiftKey) {
        e.preventDefault();
        if (this.value.trim() && !chatState.isTyping) {
          sendMessage();
        }
      }
    });

    // Close on outside click
    document.addEventListener('click', function(e) {
      const chatWindow = document.getElementById('lw-chatbot-window');
      // If chatbot is closed, do nothing
      if (!chatState.isOpen) return;

      // Check if the click was on the window or the floating button
      const isInsideWindow = chatWindow.contains(e.target);
      const isChatButton = chatButton.contains(e.target);
      
      // Check if the click was on a triggering link (to avoid auto-closing immediately after opening)
      const isTrigger = e.target.closest('[onclick*="openChatBot"]') || 
                        e.target.closest('[onclick*="openTawkChat"]') ||
                        e.target.closest('.open-chatbot');

      if (!isInsideWindow && !isChatButton && !isTrigger) {
        toggleChatbot(false); // Close it
      }
    });

    // Keyboard accessibility
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape' && chatState.isOpen) {
        toggleChatbot();
      }
    });
  }

  // --- Logic Works Chatbot API Exposure ---
  // Expose methods to window.LogicWorksChat for external control (e.g. from footer links)
  window.LogicWorksChat = {
    toggle: toggleChatbot,
    open: function() {
        toggleChatbot(true);
    },
    close: function() {
        toggleChatbot(false);
    }
  };
  // ----------------------------------------

  // Load when DOM is ready
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initChatbot);
  } else {
    initChatbot();
  }
})();