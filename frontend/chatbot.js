
(function() {
  'use strict';
  console.log("Chatbot script executing...");

  // Configuration - Logic Works Chatbot
  const CONFIG = {
    whatsappUrl: 'https://wa.me/971529502258',
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
      <!-- WhatsApp FAB (opens WhatsApp; AI chat still via footer / LogicWorksChat) -->
      <a id="lw-chatbot-button" href="${CONFIG.whatsappUrl}" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
          <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.435 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
        </svg>
      </a>

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
        <h4> Welcome!</h4>
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
      btn.addEventListener('click', function(e) {
        // Prevent this click from being treated as an outside click and stop bubbling
        e.preventDefault();
        e.stopPropagation();

        const question = this.getAttribute('data-question');
        const inputEl = document.getElementById('lw-chatbot-input');
        inputEl.value = question;

        // Trigger input event so UI updates (auto-resize, enable send button)
        inputEl.dispatchEvent(new Event('input', { bubbles: true }));

        // Make sure chat window is open (safeguard)
        if (!chatState.isOpen) toggleChatbot(true);

        // Use a short delay to avoid potential race conditions with other handlers
        setTimeout(() => {
          if (!chatState.isTyping) sendMessage();
        }, 50);
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

      // Delay focus slightly to ensure window is visible for browser accessibility
      setTimeout(() => {
        if (chatState.isOpen) chatInput.focus();
      }, 100);
    } else {
      chatWindow.classList.remove('open');
      chatWindow.setAttribute('aria-hidden', 'true');
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
    const chatFab = document.getElementById('lw-chatbot-button');
    const closeButton = document.getElementById('lw-chatbot-close');
    const sendButton = document.getElementById('lw-chatbot-send');
    const input = document.getElementById('lw-chatbot-input');

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
      const isChatFab = chatFab.contains(e.target);
      
      // Check if the click was on a triggering link (to avoid auto-closing immediately after opening)
      const isTrigger = e.target.closest('[onclick*="openChatBot"]') || 
                        e.target.closest('[onclick*="openTawkChat"]') ||
                        e.target.closest('.open-chatbot');

      if (!isInsideWindow && !isChatFab && !isTrigger) {
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