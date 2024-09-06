<script setup>
import { ref, onMounted,computed } from "vue";
import { Head, Link, router } from "@inertiajs/vue3";

defineProps({
  canLogin: Boolean,
  canRegister: Boolean,
  laravelVersion: String,
  phpVersion: String,
});

// Retrieve values from localStorage or set defaults
const coins = ref(Number(localStorage.getItem("coins")) || 0);
const total = ref(Number(localStorage.getItem("total")) || 500);
const power = ref(Number(localStorage.getItem("power")) || 500);
const count = ref(Number(localStorage.getItem("count")) || 1);

// Log to ensure proper initialization

const coinvalue = computed(() => {
  return coins.value;
});
const powerValue = computed(() => {
  return power.value;
});
const totalValue = computed(() => {
  return total.value;
});
const updateLocalStorage = () => {
  localStorage.setItem("coins", coins.value);
  localStorage.setItem("total", total.value);
  localStorage.setItem("power", power.value);
  localStorage.setItem("count", count.value);
  console.log("Coins:", coins.value, "Total:", total.value, "Power:", power.value);
};

const handleClick = (e) => {
  const image = e.target;
  let x = e.offsetX;
  let y = e.offsetY;

  navigator.vibrate(5);

  if (power.value > 0) {
    coins.value += 1;
    power.value -= 1;
    updateLocalStorage();
  }

  // Apply the transformations based on the click position
  if (x < 150 && y < 150) {
    image.style.transform =
      "translate(-0.25rem, -0.25rem) skewY(-10deg) skewX(5deg)";
  } else if (x < 150 && y > 150) {
    image.style.transform =
      "translate(-0.25rem, 0.25rem) skewY(-10deg) skewX(5deg)";
  } else if (x > 150 && y > 150) {
    image.style.transform =
      "translate(0.25rem, 0.25rem) skewY(10deg) skewX(-5deg)";
  } else if (x > 150 && y < 150) {
    image.style.transform =
      "translate(0.25rem, -0.25rem) skewY(10deg) skewX(-5deg)";
  }

  setTimeout(() => {
    image.style.transform = "translate(0px, 0px)";
  }, 100);
};

// Power regeneration
const regeneratePower = () => {
  if (total.value > power.value) {
    power.value += Number(count.value);
    updateLocalStorage();
  }
};

onMounted(() => {
  setInterval(regeneratePower, 1000);
});
</script>

<!-- <script>
export default {
  computed:{
    coinvalue(){
      return coins.value;
    }
  }
}
</script> -->

<template>
  <body>
    <Head title="telegram mini app tap2earn home page" />

    <div class="squad-container">
      <div class="login">
        <div class="login-detail">
          <div class="profile">
            <span>?</span>
          </div>

          <div class="user-data">
            <span class="name">UNKNOWN</span>
            <span class="user-rank">No rank</span>
          </div>
        </div>

        <div>
          <a href="/notcoin/login.html">
            <svg
              width="30px"
              height="30px"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                opacity="0.8"
                d="M2.00098 11.999L16.001 11.999M16.001 11.999L12.501 8.99902M16.001 11.999L12.501 14.999"
                stroke="#ffffff"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                opacity="0.5"
                d="M9.00195 7C9.01406 4.82497 9.11051 3.64706 9.87889 2.87868C10.7576 2 12.1718 2 15.0002 2L16.0002 2C18.8286 2 20.2429 2 21.1215           2.87868C22.0002 3.75736 22.0002 5.17157 22.0002 8L22.0002 16C22.0002 18.8284 22.0002 20.2426 21.1215 21.1213C20.2429 22 18.8286 22 16.0002 22H15.0002C12.1718 22 10.7576 22 9.87889 21.1213C9.11051 20.3529 9.01406 19.175 9.00195 17"
                stroke="#ffffff"
                stroke-width="1.5"
                stroke-linecap="round"
              />
            </svg>
          </a>
        </div>
      </div>
    </div>

    <div class="coin-count-container">
      <img src="./../../css/frontend/images/coin.png" width="45px" />
      <h1 class="select-none">
        <h1 class="select-none">{{coinvalue}}</h1>

      </h1>
    </div>

    <div class="rank-container">
      <div class="rank-items">
        <h3 class="select-none">No rank</h3>
        <span>•</span>
        <img
          src="./../../css/frontend/images/bronze-medal.png"
          class="select-none"
          width="30px"
        />
        <span id="rank" class="select-none">bronze</span>
      </div>
    </div>

    <div class="coin-container">
      <img
        src="./../../css/frontend/images/golden.png"
        id="coin"
        class="select-none"
        width="300px"
        @click="handleClick"
      />
    </div>

    <div class="menu-container">
      <div class="power">
        <img src="./../../css/frontend/images/thunder.png" width="40px" />
        <div class="power-count">
          <span id="power" class="select-none">{{ powerValue }}</span>
          <span class="gray select-none" id="total">/{{ totalValue }}</span>
        </div>
      </div>

      <div class="menu-bottuns">
        <a href="/notcoin/frens.html" class="button b-r">
          <img
            src="./../../css/frontend/images/teddy-bear.png"
            alt=""
            width="28px"
          />
          <span class="select-none">Project</span>
        </a>
        <a href="/notcoin/frens.html" class="button b-r">
          <img
            src="./../../css/frontend/images/teddy-bear.png"
            alt=""
            width="28px"
          />
          <span class="select-none">Friends</span>
        </a>
        <a href="/notcoin/earn.html" class="button b-r">
          <img src="./../../css/frontend/images/coin.png" alt="" width="28px" />
          <span class="select-none">Earn</span>
        </a>
        <a href="/notcoin/boost.html" class="button">
          <img
            src="./../../css/frontend/images/rocket.png"
            alt=""
            width="28px"
          />
          <span class="select-none">Wallet</span>
        </a>
      </div>
    </div>

    <div class="progress-bar">
      <div
        class="progress"
        :style="{ width: `${(100 * power.value) / total.value}%` }"
      ></div>
    </div>
  </body>
</template>

<style scoped>
/* Your styles here */
</style>

<style scoped>
.hr-with-text {
  width: 80%;
  margin: 0 auto;
  position: relative;
  border: none;
}
.hr-with-text::before,
.hr-with-text::after {
  content: "";
  position: absolute;
  top: 50%;
  width: 20%;
  border-top: 1px solid #000;
}
.hr-with-text::before {
  right: 100%;
  margin-right: 15px;
}
.hr-with-text::after {
  left: 100%;
  margin-left: 15px;
}
.centered-text {
  position: relative;
  display: inline-block;
  background-color: #071b9c;
  padding: 0 10px;
  top: -0.7em; /* Adjust this value to vertically center the text */
}

.con-input {
  background: tan;
  display: flex;
  align-items: center;
  padding: 5px;
  border-radius: 12px;
  position: relative;
  width: 240px;
  left: 50%;
}
.con-input input {
  border: 0px;
  background: transparent;
  outline: none;
  font-size: 0.9rem;
  font-family: "poppins", sans-serif;
  margin-left: 8px;
  width: 200px;
  transition: all 0.25s ease;
}
.con-input input:focus {
  padding-left: 5px;
  padding-right: 0px;
}
.con-input input:focus ~ .bg {
  border: 2px solid #000;
}
.con-input input:focus ~ i {
  transform: translate(0, -8px);
  box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
}
.con-input i.icon {
  order: -1;
  background: #fff;
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 31px;
  height: 31px;
  z-index: 20px;
  transition: all 0.25s ease;
}
.bg {
  background: transparent;
  width: 100%;
  height: 100%;
  position: absolute;
  z-index: 1;
  left: 0px;
  top: 0px;
  pointer-events: none;
  border-radius: inherit;
  box-sizing: border-box;
  border: 2px solid transparent;
  transition: all 0.25s ease;
}
.question {
  color: #fff;
  background: #1a0138;
}
.answer {
  color: #aa9797;
  background: #200147;
}
</style>
