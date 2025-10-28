<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Slider</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        
        .portfolio-container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            
           
        }
        
        .main-slider {
            position: relative;
            margin-bottom: 30px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        
        .main-slide {
            position: relative;
            height: 500px;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }
        
        .main-slide::before {
            content: 'PORTOLIO';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: red;
            z-index: 1;
        }
        
        .slide-content {
            position: relative;
            z-index: 2;
            max-width: 600px;
            padding: 20px;
        }
        
     
        
     
        .btn-slide {
            padding: 12px 30px;
            font-weight: bold;
            text-transform: uppercase;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
      
        
        .btn-slide:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
        
        .nav-arrow {
            position: absolute;
            top: 50%;
         background-color: transparent;
         border: none;
        
        
          
            cursor: pointer;
     
            z-index: 3;
        }
        
      
        
        .nav-prev {
            left: 20px;
        
        }
        
        .nav-next {
            right: 20px;
             
        }
        
        .thumbnail-slider {
            position: relative;
            margin-top: 30px;
        }
        
        .thumbnail-container {
            display: flex;
            gap: 15px;
            overflow-x: auto;
            padding: 10px 0;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }
        
        .thumbnail-container::-webkit-scrollbar {
            display: none;
        }
        
        .thumbnail {
            flex: 0 0 200px;
            height: 150px;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        
        .thumbnail.active {
            transform: scale(1.05);
            box-shadow: 0 8px 25px rgba(0,0,0,0.4);
            border: 3px solid #007bff;
        }
        
        .thumbnail:hover {
            transform: scale(1.02);
        }
        
        .thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .thumbnail-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
         background-color: transparent;
          border: none;
           
            width: 60px;
            height: 20px;
          
            
            cursor: pointer;
        
            z-index: 3;
        }
        
    
        
        .thumbnail-prev {
            left: -60px;
        }
        
        .thumbnail-next {
            right: -60px;
        }
        
        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @media (max-width: 768px) {
            .slide-title {
                font-size: 2rem;
            }
            
            .slide-description {
                font-size: 1rem;
            }
            
            .slide-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .thumbnail {
                flex: 0 0 150px;
                height: 120px;
            }
        }
    </style>
</head>
<body>
    <div class="portfolio-container ">
        <!-- Main Slider -->
        <div class="main-slider">
            <div class="main-slide fade-in" id="mainSlide">
                <!-- <div class="slide-content">
                    <h1 class="slide-title" id="slideTitle">THE ULTIMATE COFFEE EXPERIENCE</h1>
                    <p class="slide-description" id="slideDescription">
                        We source the finest beans from around the world and roast them to perfection. 
                        Our baristas are passionate about creating the best coffee experience, one cup at a time.
                    </p>
                    <div class="slide-buttons">
                        <button class="btn-slide btn-explore">EXPLORE MORE ></button>
                        <button class="btn-slide btn-shop">SHOP NOW ></button>
                    </div>
                </div> -->
            </div>
            
            <!-- Navigation Arrows -->
            <button class="nav-arrow nav-prev" onclick="changeSlide(-1)">
             < back
            </button>
            <button class="nav-arrow nav-next" onclick="changeSlide(1)">
                  <img src="assests/images/website/next.png" alt="">
            </button>
        </div>
        
        <!-- Thumbnail Slider -->
        <div class="thumbnail-slider">
            <button class="thumbnail-nav thumbnail-prev" onclick="scrollThumbnails(-1)">
 <img src="assests/images/website/service-arrow-left.png" alt="">            </button>
            <button class="thumbnail-nav thumbnail-next" onclick="scrollThumbnails(1)">
                <img src="assests/images/website/service-arrow-right.png" alt="">
            </button>
            
            <div class="thumbnail-container" id="thumbnailContainer">
                <!-- Thumbnails will be generated by JavaScript -->
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Sample data for the slider
        const slides = [
            {
                title: "THE ULTIMATE COFFEE EXPERIENCE",
                description: "We source the finest beans from around the world and roast them to perfection. Our baristas are passionate about creating the best coffee experience, one cup at a time.",
           image: "assests/images/website/gametimewellness.png",
                buttons: ["EXPLORE MORE >", "SHOP NOW >"]
            },
            {
              
                image:"assests/images/website/captbutch.png",

            },
            {
                title: "DIAMOND PROSPECT",
                description: "Discover luxury and elegance with our premium diamond collection. Each piece tells a unique story of beauty and sophistication.",
                image:  "assests/images/website/depatieroof.png",
                buttons: ["BROWSE COLLECTION >", "BOOK CONSULTATION >"]
            },
            {
                title: "GAME-TIME MASSAGE",
                description: "The ultimate timeout for your body and mind. Professional massage therapy to help you relax and recover.",
                image:"assests/images/website/slider-01.png",
                buttons: ["BOOK SESSION >", "VIEW SERVICES >"]
            },
            {
                title: "DIAMOND PROSPECT",
                description: "Discover luxury and elegance with our premium diamond collection. Each piece tells a unique story of beauty and sophistication.",
                image: "assests/images/website/funkifitgame.png",
                buttons: ["BROWSE COLLECTION >", "BOOK CONSULTATION >"]
            },
            {
                title: "GAME-TIME MASSAGE",
                description: "The ultimate timeout for your body and mind. Professional massage therapy to help you relax and recover.",
              image:  "assests/images/website/depatieroof.png",
                buttons: ["BOOK SESSION >", "VIEW SERVICES >"]
            },
            {
                title: "ASPHALT CONSTRUCTION CO",
                description: "The paving & asphalt specialists. Quality road construction and maintenance services for all your infrastructure needs.",
                image:"assests/images/website/slider-01.png",
                buttons: ["GET QUOTE >", "VIEW SERVICES >"]
            },
        ];

        let currentSlide = 0;

        // Initialize the slider
        function initSlider() {
            createThumbnails();
            updateMainSlide();
        }

        // Create thumbnail images
        function createThumbnails() {
            const container = document.getElementById('thumbnailContainer');
            container.innerHTML = '';
            
            slides.forEach((slide, index) => {
                const thumbnail = document.createElement('div');
                thumbnail.className = `thumbnail ${index === 0 ? 'active' : ''}`;
                thumbnail.onclick = () => goToSlide(index);
                
                const img = document.createElement('img');
                img.src = slide.image;
                img.alt = slide.title;
                
                thumbnail.appendChild(img);
                container.appendChild(thumbnail);
            });
        }

        // Update main slide
        function updateMainSlide() {
            const slide = slides[currentSlide];
            const mainSlide = document.getElementById('mainSlide');
            const slideTitle = document.getElementById('slideTitle');
            const slideDescription = document.getElementById('slideDescription');
            
            // Update background image
            mainSlide.style.backgroundImage = `url(${slide.image})`;
            
            // Update content
            slideTitle.textContent = slide.title;
            slideDescription.textContent = slide.description;
            
            // Update buttons
            const buttonsContainer = mainSlide.querySelector('.slide-buttons');
            buttonsContainer.innerHTML = '';
            slide.buttons.forEach(buttonText => {
                const button = document.createElement('button');
                button.className = `btn-slide ${buttonText.includes('EXPLORE') || buttonText.includes('VIEW') || buttonText.includes('BROWSE') || buttonText.includes('BOOK') || buttonText.includes('GET') ? 'btn-explore' : 'btn-shop'}`;
                button.textContent = buttonText;
                buttonsContainer.appendChild(button);
            });
            
            // Add fade-in animation
            mainSlide.classList.remove('fade-in');
            void mainSlide.offsetWidth; // Trigger reflow
            mainSlide.classList.add('fade-in');
            
            // Update active thumbnail
            updateActiveThumbnail();
        }

        // Update active thumbnail
        function updateActiveThumbnail() {
            const thumbnails = document.querySelectorAll('.thumbnail');
            thumbnails.forEach((thumb, index) => {
                thumb.classList.toggle('active', index === currentSlide);
            });
        }

        // Change slide
        function changeSlide(direction) {
            currentSlide += direction;
            
            if (currentSlide >= slides.length) {
                currentSlide = 0;
            } else if (currentSlide < 0) {
                currentSlide = slides.length - 1;
            }
            
            updateMainSlide();
        }

        // Go to specific slide
        function goToSlide(index) {
            currentSlide = index;
            updateMainSlide();
        }

        // Scroll thumbnails
        function scrollThumbnails(direction) {
            const container = document.getElementById('thumbnailContainer');
            const scrollAmount = 220; // Width of thumbnail + gap
            
            if (direction > 0) {
                container.scrollLeft += scrollAmount;
            } else {
                container.scrollLeft -= scrollAmount;
            }
        }

        // Auto-play functionality
        let autoPlayInterval;
        
        function startAutoPlay() {
            autoPlayInterval = setInterval(() => {
                changeSlide(1);
            }, 5000); // Change slide every 5 seconds
        }
        
        function stopAutoPlay() {
            clearInterval(autoPlayInterval);
        }

        // Initialize when page loads
        document.addEventListener('DOMContentLoaded', function() {
            initSlider();
            startAutoPlay();
            
            // Stop auto-play when user interacts
            const mainSlider = document.querySelector('.main-slider');
            mainSlider.addEventListener('mouseenter', stopAutoPlay);
            mainSlider.addEventListener('mouseleave', startAutoPlay);
        });

        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            if (e.key === 'ArrowLeft') {
                changeSlide(-1);
            } else if (e.key === 'ArrowRight') {
                changeSlide(1);
            }
        });
    </script>
</body>
</html>
