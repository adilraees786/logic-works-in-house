<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

   <style>
    body {
        margin: 0;
        padding: 0;
        color: #fff;
    }

    .section {
        display: flex;
        flex-direction: column;
        padding: 60px 80px;
        background-image: url('assests/images/adword-marketing/bg-pattern.png');
        background-size: cover;
        background-position: center;
    }

    .heading {
        text-align: center;
        margin-bottom: 40px;
    }

    .heading h1 {
        font-size: 72px;
        font-weight: 700;
        margin-bottom: 10px;
        color:white;
    }

    .heading p {
        font-size: 36px;
        font-weight: 400;
         color: white;
    }

    .content-area {
        display: flex;
        justify-content: space-between;
        gap: 30px;
    }

    .tabs {
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

    .tab-content {
        width: 55%;
        padding: 25px;
    }

    .tab-content img {
        width: 100%;
        height: auto;
        border-radius: 6px;
        margin-bottom: 20px;
    }

    .tab-content h3 {
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 10px;
        color: white;
    }

    .tab-content p {
        color: white;
        font-size: 24px;
        line-height: 1.6;
        font-weight: 400;
    }

    .tab-content .read-more {
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

        .content-area {
            flex-direction: column;
        }

        .tabs,
        .tab-content {
            width: 100%;
        }
    }
</style>
</head>

<body>



  <div class="section">
    <div class="heading">
        <h1>Core AI Solutions  <br>for E-commerce</h1>
        <p>Smart Tools That Drive Growth & Efficiency</p>
    </div>

    <div class="content-area">
        <div class="tabs" id="tabs">
            <!-- Tab buttons -->
        </div>

        <div class="tab-content" id="tabContent">
            <!-- Tab content -->
        </div>
    </div>
</div>


    <script>
        const data = [
            {
                title: "Product Recommendation Engines",
                text: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                img: "assests/images/ai-e-commerce/img1.png",
            },
            {
                title: "Cart Abandonment Recovery Bots",
                text: "Bots that help recover abandoned carts by sending timely reminders via email or chatbot to encourage purchase.",
                img: "assests/images/ai-e-commerce/img1.png",
            },
            {
                title: "AI Email & SMS Automation",
                text: "Automated campaigns through AI-driven platforms that increase engagement and save manual effort.",
                img: "assests/images/ai-e-commerce/img1.png",
            },
            {
                title: "AI-Powered Chatbots & Virtual Assistants",
                text: "24/7 AI chat support that enhances user experience, resolves queries instantly, and reduces support cost.",
                img: "assests/images/ai-e-commerce/img1.png",
            },
            {
                title: "Customer Behavior Prediction",
                text: "Machine learning tools that predict what your customers might do next — helping you target them effectively.",
                img: "assests/images/ai-e-commerce/img1.png",
            },
            {
                title: "AI Inventory Forecasting",
                text: "Helps forecast stock levels to avoid overstocking or stockouts using real-time data analysis.",
                img: "assests/images/ai-e-commerce/img1.png",
            },
            {
                title: "Personalized Search & Merchandising",
                text: "Delivers customized search results and product displays, improving conversions and user satisfaction.",
                img: "assests/images/ai-e-commerce/img1.png",
            },
            {
                title: "Sentiment Analysis on Reviews",
                text: "Analyzes customer reviews to understand sentiment, providing actionable insights to businesses.",
                img: "assests/images/ai-e-commerce/img1.png",
            },
        ];

        const tabsContainer = document.getElementById("tabs");
        const tabContent = document.getElementById("tabContent");

        function setActiveTab(index) {
            const allButtons = document.querySelectorAll(".tab-button");
            allButtons.forEach(btn => btn.classList.remove("active"));
            allButtons[index].classList.add("active");

            const { title, text, img } = data[index];
            tabContent.innerHTML = `
      <img src="${img}" alt="${title}" />
      <h3>${title}</h3>
      <p>${text}</p>
      <button class="read-more">Read More</button>
    `;
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

</html>