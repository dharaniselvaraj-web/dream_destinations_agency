
<footer>
                <div class="foot">
                    <div class="col1">
                        <h3 style="font-size: 22px; margin-top: 20px;">Dreams Beyond <br>                          
                        <i class="fa-solid fa-heart" style=" color: tomato; margin-left: 75px;"></i><br><span style="margin-left: 100px; line-height: 5px;"> Destinations</span> </h3>
                        <br><p>We are ambitious travel pioneers in the course of offering our clients a perfect combination of Exclusivity,<br> Comfort and authentic experiences... <br> All our tours have that Something Special ingredient to make your vacation unique and memorable...</p>
                    </div>
                    <div class="c-foot">
                        <h3> company</h3><br>
                        <div class="com">
                            <ul style="list-style-type: none; ">
                                <li ><a href="home.php">Home</a></li>
                                <li ><a href="about_us.php">About Us</a></li>
                                <li ><a href="services.php">Services</a></li>
                                <li ><a href="destinations.php">Destinations</a></li>
                                <li ><a href="contact.php">Contact Us</a></li>
                                <li ><a href="privacy_policy.php">Privacy Policy</a></li>
                                <li ><a href="terms_conditions.php">Terms & conditions</a></li>
                                <li ><a href="cancellation_policy.php">Cancellation Policy</a></li>
                                <li ><a href="disclaimer.php">Disclaimer</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="t-foot">
                        <h3> trending trips</h3><br>
                        <div class="trips">
                            <ul style="list-style-type: none; ">
                                <li ><a href="destinations.php">Dubai</a></li>
                                <li ><a href="destinations.php">Bali</a></li>
                                <li ><a href="destinations.php">Maldives</a></li>
                                <li ><a href="destinations.php">Kenya</a></li>
                                <li><a href="destinations.php">Andaman</a></li>
                                <li ><a href="destinations.php">Kashmir</a></li>
                                <li ><a href="destinations.php">Himachal </a></li>
                                <li ><a href="destinations.php">Kashmir </a></li>
                                <li ><a href="destinations.php">North East </a></li>
                                <li ><a href="destinations.php">Kerala </a></li>
                                <li ><a href="destinations.php">Karnataka </a></li>
                                <li ><a href="destinations.php">Goa </a></li>
                                <li ><a href="destinations.php">Rajasthan </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="l-foot">
                        <h3> let's talk</h3>
                        <h3> + 91 80728 33552</h3>
                        <h3> connect with us</h3>
                        <div class="social"> 
                            <a href="https://www.facebook.com/" ><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.youtube.com/" ><i class="fab fa-youtube"></i></a>
                            <a href="https://www.instagram.com/" ><i class="fab fa-instagram"></i></a>
                            <a href="https://www.whatsapp.com/" ><i class="fab fa-whatsapp"></i></a>
                            <a href="https://x.com/i/flow/login?lang=en" ><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>  
            
                <div class="footer">
                    &copy; 2025 Dreams Beyond  <i class="fa-solid fa-heart"style="color:red;;"></i>  Destinations. All rights reserved.
                </div>
            </footer>
        </div>
    </body>
             
    <script>
    const hamburger = document.querySelector('.hamburger-menu');
    const nav = document.querySelector('.nav');
    hamburger.addEventListener('click', () => {
        nav.classList.toggle('active');
    });


document.addEventListener('DOMContentLoaded', () => {
    const track = document.querySelector('.carousel-track');
    const nextButton = document.querySelector('.carousel-button.next');
    const prevButton = document.querySelector('.carousel-button.prev');

    const slidesVisible = 3; 

    const totalSlides = document.querySelectorAll('.carousel-slide').length;
    
    let currentSlideIndex = 0; 

   
    const maxIndex = totalSlides - slidesVisible; 

    const updateCarousel = () => {
       
        const shiftAmount = currentSlideIndex * (100 / slidesVisible);
        track.style.transform = `translateX(-${shiftAmount}%)`;
    };

    nextButton.addEventListener('click', () => {
        if (currentSlideIndex < maxIndex) {
            currentSlideIndex++;
            updateCarousel();
        } 
        
    });

    prevButton.addEventListener('click', () => {
        if (currentSlideIndex > 0) {
            currentSlideIndex--;
            updateCarousel();
        }
        
    });
});

    function startCounter(counterElement) {
        const target = +counterElement.getAttribute('data-target');
        let count = 0;
        const speed = 200; 

        const updateCount = () => {
            const increment = Math.ceil(target / speed);
            if (count < target) {
                count += increment;
                counterElement.innerText = count;
                setTimeout(updateCount, 20);
            } else {
                counterElement.innerText = target;
            }
        };
        updateCount();
    }
    const counters = document.querySelectorAll('.counter');
    const options = {
        root: null, 
        threshold: 0.5
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                startCounter(entry.target);
                observer.unobserve(entry.target); 
            }
        });
    }, options);

    counters.forEach(counter => {
        observer.observe(counter);
    });
    
const container = document.querySelector('.parallax-container');
const image = container.querySelector('.parallax-image');

container.addEventListener('mousemove', e => {
  const rect = container.getBoundingClientRect();
  const x = e.clientX - rect.left; // mouse x inside container
  const y = e.clientY - rect.top;  // mouse y inside container

  const moveX = (x - rect.width/2) / 20; // adjust 20 to control movement
  const moveY = (y - rect.height/2) / 20;

  image.style.transform = `translate(${moveX}px, ${moveY}px)`;
});

container.addEventListener('mouseleave', () => {
  image.style.transform = 'translate(0,0)'; // reset when mouse leaves
});
</script>
<script src="subscribe.js"></script>
<script src="reveal.js"></script>
<script src="form.js"></script>
<script src="form_plan.js"></script>

    </html>