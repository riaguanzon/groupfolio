<!-- <link rel="stylesheet" href="pass.css"> -->
<label class="switch">
  <input id="input" type="checkbox" checked="darkTheme" />
  <div class="uil uil-moon change-theme">
    <div class="sun-moon">
      <svg id="moon-dot-1" class="moon-dot" viewBox="0 0 100 100">
        <circle cx="50" cy="50" r="50"></circle>
      </svg>
      <svg id="moon-dot-2" class="moon-dot" viewBox="0 0 100 100">
        <circle cx="50" cy="50" r="50"></circle>
      </svg>
      <svg id="moon-dot-3" class="moon-dot" viewBox="0 0 100 100">
        <circle cx="50" cy="50" r="50"></circle>
      </svg>
      <svg id="light-ray-1" class="light-ray" viewBox="0 0 100 100">
        <circle cx="50" cy="50" r="50"></circle>
      </svg>
      <svg id="light-ray-2" class="light-ray" viewBox="0 0 100 100">
        <circle cx="50" cy="50" r="50"></circle>
      </svg>
      <svg id="light-ray-3" class="light-ray" viewBox="0 0 100 100">
        <circle cx="50" cy="50" r="50"></circle>
      </svg>

      <svg id="cloud-1" class="cloud-dark" viewBox="0 0 100 100">
        <circle cx="50" cy="50" r="50"></circle>
      </svg>
      <svg id="cloud-2" class="cloud-dark" viewBox="0 0 100 100">
        <circle cx="50" cy="50" r="50"></circle>
      </svg>
      <svg id="cloud-3" class="cloud-dark" viewBox="0 0 100 100">
        <circle cx="50" cy="50" r="50"></circle>
      </svg>
      <svg id="cloud-4" class="cloud-light" viewBox="0 0 100 100">
        <circle cx="50" cy="50" r="50"></circle>
      </svg>
      <svg id="cloud-5" class="cloud-light" viewBox="0 0 100 100">
        <circle cx="50" cy="50" r="50"></circle>
      </svg>
      <svg id="cloud-6" class="cloud-light" viewBox="0 0 100 100">
        <circle cx="50" cy="50" r="50"></circle>
      </svg>
    </div>
    <div class="stars">
      <svg id="star-1" class="star" viewBox="0 0 20 20">
        <path
          d="M 0 10 C 10 10,10 10 ,0 10 C 10 10 , 10 10 , 10 20 C 10 10 , 10 10 , 20 10 C 10 10 , 10 10 , 10 0 C 10 10,10 10 ,0 10 Z"
        ></path>
      </svg>
      <svg id="star-2" class="star" viewBox="0 0 20 20">
        <path
          d="M 0 10 C 10 10,10 10 ,0 10 C 10 10 , 10 10 , 10 20 C 10 10 , 10 10 , 20 10 C 10 10 , 10 10 , 10 0 C 10 10,10 10 ,0 10 Z"
        ></path>
      </svg>
      <svg id="star-3" class="star" viewBox="0 0 20 20">
        <path
          d="M 0 10 C 10 10,10 10 ,0 10 C 10 10 , 10 10 , 10 20 C 10 10 , 10 10 , 20 10 C 10 10 , 10 10 , 10 0 C 10 10,10 10 ,0 10 Z"
        ></path>
      </svg>
      <svg id="star-4" class="star" viewBox="0 0 20 20">
        <path
          d="M 0 10 C 10 10,10 10 ,0 10 C 10 10 , 10 10 , 10 20 C 10 10 , 10 10 , 20 10 C 10 10 , 10 10 , 10 0 C 10 10,10 10 ,0 10 Z"
        ></path>
      </svg>
    </div>
  </div>
</label>

<style>
/* From Uiverse.io by RiccardoRapelli */
.switch {
    position: relative;
    display: inline-block;
    width: 40px;  /* Smaller width */
    height: 22px;  /* Smaller height */
}

.switch #input {
    opacity: 0;
    width: 0;
    height: 0;
}

.uil.uil-moon.change-theme {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #2196f3;
    -webkit-transition: 0.4s;
    transition: 0.4s;
    z-index: 0;
    overflow: hidden;
}

.sun-moon {
    position: absolute;
    content: "";
    height: 18px;  /* Smaller size */
    width: 18px;   /* Smaller size */
    left: 3px;     /* Adjust position */
    bottom: 3px;   /* Adjust position */
    background-color: yellow;
    -webkit-transition: 0.4s;
    transition: 0.4s;
}

#input:checked + .uil.uil-moon.change-theme {
    background-color: black;
}

#input:focus + .uil.uil-moon.change-theme {
    box-shadow: 0 0 1px #2196f3;
}

#input:checked + .uil.uil-moon.change-theme .sun-moon {
    -webkit-transform: translateX(18px);  /* Adjusted translate distance */
    -ms-transform: translateX(18px);
    transform: translateX(18px);
    background-color: white;
    -webkit-animation: rotate-center 0.6s ease-in-out both;
    animation: rotate-center 0.6s ease-in-out both;
}

.moon-dot {
    opacity: 0;
    transition: 0.4s;
    fill: gray;
}

#input:checked + .uil.uil-moon.change-theme .sun-moon .moon-dot {
    opacity: 1;
}

.uil.uil-moon.change-theme {
    border-radius: 22px; /* Adjusted border radius */
}

.uil.uil-moon.change-theme .sun-moon {
    border-radius: 50%;
}

#moon-dot-1, #moon-dot-2, #moon-dot-3 {
    width: 4px;  /* Smaller size */
    height: 4px; /* Smaller size */
}

#light-ray-1, #light-ray-2, #light-ray-3 {
    width: 30px; /* Smaller size */
    height: 30px; /* Smaller size */
}

.cloud-light {
    position: absolute;
    fill: #eee;
    animation-name: cloud-move;
    animation-duration: 6s;
    animation-iteration-count: infinite;
}

.cloud-dark {
    position: absolute;
    fill: #ccc;
    animation-name: cloud-move;
    animation-duration: 6s;
    animation-iteration-count: infinite;
    animation-delay: 1s;
}

#cloud-1 {
    left: 22px;   /* Adjusted position */
    top: 10px;    /* Adjusted position */
    width: 30px;  /* Smaller size */
}

#cloud-2 {
    left: 30px;   /* Adjusted position */
    top: 8px;     /* Adjusted position */
    width: 18px;  /* Smaller size */
}

#cloud-3 {
    left: 12px;   /* Adjusted position */
    top: 16px;    /* Adjusted position */
    width: 24px;  /* Smaller size */
}

#cloud-4 {
    left: 28px;   /* Adjusted position */
    top: 12px;    /* Adjusted position */
    width: 30px;  /* Smaller size */
}

#cloud-5 {
    left: 36px;   /* Adjusted position */
    top: 10px;    /* Adjusted position */
    width: 16px;  /* Smaller size */
}

#cloud-6 {
    left: 18px;   /* Adjusted position */
    top: 20px;    /* Adjusted position */
    width: 24px;  /* Smaller size */
}

@keyframes cloud-move {
    0% {
      transform: translateX(0px);
    }

    40% {
      transform: translateX(4px);
    }

    80% {
      transform: translateX(-4px);
    }

    100% {
      transform: translateX(0px);
    }
}

.stars {
    transform: translateY(-32px);
    opacity: 0;
    transition: 0.4s;
}

.star {
    fill: white;
    position: absolute;
    -webkit-transition: 0.4s;
    transition: 0.4s;
    animation-name: star-twinkle;
    animation-duration: 2s;
    animation-iteration-count: infinite;
}

#input:checked + .uil.uil-moon.change-theme .stars {
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
}

#star-1 {
    width: 12px;   /* Smaller size */
    top: 2px;
    left: 2px;
    animation-delay: 0.3s;
}

#star-2 {
    width: 4px;    /* Smaller size */
    top: 12px;
    left: 4px;
}

#star-3 {
    width: 8px;    /* Smaller size */
    top: 14px;
    left: 8px;
    animation-delay: 0.6s;
}

#star-4 {
    width: 12px;   /* Smaller size */
    top: 0px;
    left: 12px;
    animation-delay: 1.3s;
}

@keyframes star-twinkle {
    0% {
      transform: scale(1);
    }

    40% {
      transform: scale(1.2);
    }

    80% {
      transform: scale(0.8);
    }

    100% {
      transform: scale(1);
    }
}
</style>
