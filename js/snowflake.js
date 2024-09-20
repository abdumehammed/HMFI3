const snowflakeContainer = document.querySelector('.snowflakes-container');
const snowflakeImageSrc = 'img/Adey.png'; // Path to your snowflake image
const numberOfSnowflakes = 20; // Number of snowflakes to repeat

for (let i = 0; i < numberOfSnowflakes; i++) {
  // Create a new image element
  const snowflake = document.createElement('img');
  snowflake.src = snowflakeImageSrc;
  snowflake.classList.add('snowflake');

  // Set the alt attribute
  snowflake.setAttribute('alt', 'Adey Abeba');

  // Randomize the starting position, speed, and delay
  snowflake.style.left = Math.random() * window.innerWidth + 'px';
  snowflake.style.animationDuration = Math.random() * 3 + 2 + 's'; // Random speed between 2-5 seconds
  snowflake.style.animationDelay = Math.random() * 5 + 's'; // Random delay for staggered effect
  
  // Append the snowflake to the container
  snowflakeContainer.appendChild(snowflake);
}
