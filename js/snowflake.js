document.addEventListener('DOMContentLoaded', () => {
    const snowflakeContainer = document.getElementById('snowflakes');
    const numSnowflakes = 100; // Adjust as needed
  
    function createSnowflake() {
      const snowflake = document.createElement('div');
      snowflake.className = 'snowflake';
      
      // Set random left position and animation properties
      snowflake.style.left = `${Math.random() * 100}vw`; // Random horizontal position
      snowflake.style.animationDuration = `${Math.random() * 2 + 7}s`; // Random speed
      snowflake.style.opacity = Math.random();
      snowflake.style.animationDelay = `${Math.random() * 0}s`; // Random delay
      
      // Dynamically set the fall distance based on body height (until the footer)
      const bodyHeight = document.body.scrollHeight;
      snowflake.style.transform = `translateY(${bodyHeight}px)`; // Drop until the footer
  
      snowflakeContainer.appendChild(snowflake);
  
      // Remove snowflake after animation to clean up
      snowflake.addEventListener('animationend', () => {
        snowflake.remove();
      });
    }
  
    // Create snowflakes at intervals
   