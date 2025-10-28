<style>
    body {
        margin: 0;
        padding: 0;
        color: #fff;
    }

    .section-ai {
        display: flex;
        flex-direction: column;
        padding: 60px 80px;
        background-image: url('assests/images/adword-marketing/bg-pattern.webp');
        background-size: cover;
        background-position: center;
    }

    .heading {
        text-align: center;
        margin-bottom: 40px;
    }

    .heading h2 {
        font-size: 55px;
        font-weight: 600;
        margin-bottom: 10px;
        color: white;
        line-height: 1.2;
    }

    .heading p {
        font-size: 30px;
        font-weight: 400;
        color: white;
        line-height: 1.2;
    }

    .content-area {
        display: flex;
        justify-content: space-between;
        gap: 30px;
    }

    .tabs-ai {
        width: 40%;
    }

    .tab-button {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 15px 25px;
        margin-bottom: 10px;
        font-size: 18px;
        font-weight: 500;
        border-radius: 8px;
        cursor: pointer;
        background: transparent;
        border: none;
        color: white;
        transition: 0.3s ease;
        text-align: left;
    }

    .tab-button.active {
        background: #5e3ea1;
    }

    .tab-button span {
        background: #5e3ea1;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        text-align: center;
        line-height: 30px;
        font-weight: bold;
    }

    .tab-button.active span {
        background: #fff;
        color: #5e3ea1;
    }

    .tab-content-ai {
        width: 55%;
        padding: 25px;
    }

    .tab-content-ai img {
        width: 100%;
        height: auto;
        border-radius: 6px;
        margin-bottom: 20px;
    }

    .tab-content-ai h3 {
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 10px;
        color: white;
    }

    .tab-content-ai p {
        color: white;
        font-size: 24px;
        line-height: 1.4;
        font-weight: 400;
    }

    .tab-content-ai.read-more {
        margin-top: 20px;
        background: #8a4fff;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    @media (max-width: 768px) {
        .section {
            padding: 40px 20px;
        }

        .section-ai {
            padding: 30px 0px;

        }

        .content-area {
            flex-direction: column;
        }

        .tabs-ai,
        .tab-content-ai {
            width: 100%;
            max-width: 500px;
            /* ya apni desired width */
            margin: 0 auto
        }

        .heading h2 {
            font-size: 30px;
        }

        .heading p {
            font-size: 20px;
        }

        .tab-content-ai h3 {
            font-size: 30px;
        }
    }
</style>


<body>



    <div class="section-ai">
        <div class="heading">
            <h2>AI Tools for E-commerce That Improve Experience</h2>
            <p>Smart solutions that personalize shopping, increase sales, and cut costs.</p>
        </div>

        <div class="content-area">
            <div class="tabs-ai" id="tabs-ai">
                <!-- Tab buttons -->
            </div>

            <div class="tab-content-ai" id="tabContent-ai">
                <!-- Tab content -->
            </div>
        </div>
    </div>


    <script>
        const data = [
            {
                title: "AI Product Recommendation Engines",
                text: "Deliver personalized product suggestions that boost sales.",
                img: "assests/images/ai-e-commerce/ai-tab-img-1.webp",
            },
            {
                title: "Cart Abandonment Recovery with AI Bots",
                text: "Re-engage shoppers and recover lost revenue.",
                img: "assests/images/ai-e-commerce/ai-tab-img-2.webp",
            },
            {
                title: "AI-Driven Email and SMS Automation",
                text: "Send timely, targeted messages to increase conversions.",
                img: "assests/images/ai-e-commerce/ai-tab-img-3.webp",
            },
            {
                title: "AI Chatbots and Virtual Shopping Assistants",
                text: "Offer instant support and improve customer satisfaction.",
                img: "assests/images/ai-e-commerce/ai-tab-img-4.webp",
            },
            {
                title: "Customer Behavior Prediction with AI",
                text: "Anticipate needs and optimize shopping experiences.",
                img: "assests/images/ai-e-commerce/ai-tab-img-5.webp",
            },
            {
                title: "AI-Based Inventory Forecasting",
                text: "Manage stock levels with accurate demand prediction.",
                img: "assests/images/ai-e-commerce/ai-tab-img-6.webp",
            },
            {
                title: "Personalized Search and Smart Merchandising",
                text: "Guide customers to the right products faster.",
                img: "assests/images/ai-e-commerce/ai-tab-img-7.webp",
            },
            {
                title: "AI Sentiment Analysis for Customer Reviews",
                text: "Understand customer feedback and improve store reputation.",
                img: "assests/images/ai-e-commerce/ai-tab-img-8.webp",
            },
        ];

        const tabsContainer = document.getElementById("tabs-ai");
        const tabContent = document.getElementById("tabContent-ai");

        function setActiveTab(index) {
            const allButtons = document.querySelectorAll(".tab-button");
            allButtons.forEach(btn => btn.classList.remove("active"));
            allButtons[index].classList.add("active");

            const { title, text, img } = data[index];
            tabContent.innerHTML = `
      <img src="${img}" alt="${title}" />
      <h3>${title}</h3>
      <p>${text}</p>
     
    `;
            // ya button upper add kar skta hai p tag ks neecha if need  <button class="read-more">Read More</button> 
        }

        function renderTabs() {
            data.forEach((item, index) => {
                const btn = document.createElement("button");
                btn.classList.add("tab-button");
                if (index === 0) btn.classList.add("active");
                btn.innerHTML = `<span>${index + 1}</span> ${item.title}`;
                btn.onclick = () => setActiveTab(index);
                tabsContainer.appendChild(btn);
            });
            setActiveTab(0);
        }

        renderTabs();
    </script>

</body>