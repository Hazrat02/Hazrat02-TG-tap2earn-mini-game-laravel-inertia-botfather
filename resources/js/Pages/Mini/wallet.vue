<template>
    <body class="frens">
    
    <div class="haeder">
        <Link :href="route('mini')">
            <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22 11.9299H2" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8.00009 19L2.84009 14C2.5677 13.7429 2.35071 13.433 2.20239 13.0891C2.05407 12.7452 1.97754 12.3745 1.97754 12C1.97754 11.6255 2.05407 11.2548 2.20239 10.9109C2.35071 10.567 2.5677 10.2571 2.84009 10L8.00009 5" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </Link>
    </div>

    <div class="frens-main">

        <div class="frens-count">
            <span>Wallet</span>
        </div>

        <div class="frens-total-earn">
            <!-- <div class="frens-total-count">
                <span>+72.5k</span>
                <img src="./../../../css/frontend/images/coin.png" width="20px">
            </div>

            <div>
                <span>Top 300</span>
                <span class="leaders">leaders</span>
            </div> -->

            <button class="btn btn-danger">
                Connect Wallet
            </button>
            <div>
                <svg width="23px" height="23px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 5L14.15 10C14.4237 10.2563 14.6419 10.5659 14.791 10.9099C14.9402 11.2539 15.0171 11.625 15.0171 12C15.0171 12.375 14.9402 12.7458 14.791 13.0898C14.6419 13.4339 14.4237 13.7437 14.15 14L9 19" stroke="#ffffff" opacity="0.4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>

        </div>
    </div>


    <div class="frens-help">
        <div class="frens-help-title">
            <span>Your Ton network assets</span>
        </div>

        <div class="frens-help-box">
            <div class="frens-help-content">
                <div class="frens-help-image">
                    <img src="./../../../css/frontend/images/golden.png" width="50px">
                </div>
                <div class="fren-help-text">
                    <h5>Cmp</h5>
                    <div>
                        <img src="./../../../css/frontend/images/coin.png" width="15px">
                        <span>{{ coinvalue }}</span>
                    </div>
                </div>
            </div>

            <div class="frens-open-detail">
                <a href="#">Coming Soon...</a>
            </div>
        </div>
    </div>

<!-- 
    <div class="frens-list">
        <div class="frens-list-title">
            <span>Frens List</span>
        </div>

        <div class="frens-list-box">
            <div class="frens-data">
                <div class="frens-profile">
                    <div class="frens-profile-photo">
                        <img src="" alt="">
                    </div>
                    <div class="frens-profile-data">
                        <h4>User</h4>
                        <div>
                            <img src="./../../../css/frontend/images/3d-trophy.png" width="15px">
                            <span>Gold</span>
                            <span>•</span>
                            <img src="./../../../css/frontend/images/coin.png" width="15px">
                            <span>1,165,402</span>
                        </div>
                    </div>
                </div>

                <div class="frens-data-count">
                    <span>+63k</span>
                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 5L14.15 10C14.4237 10.2563 14.6419 10.5659 14.791 10.9099C14.9402 11.2539 15.0171 11.625 15.0171 12C15.0171 12.375 14.9402 12.7458 14.791 13.0898C14.6419 13.4339 14.4237 13.7437 14.15 14L9 19" stroke="#ffffff" opacity="0.4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>

            <div class="frens-data">
                <div class="frens-profile">
                    <div class="frens-profile-photo">
                        <img src="" alt="">
                    </div>
                    <div class="frens-profile-data">
                        <h4>User</h4>
                        <div>
                            <img src="./../../../css/frontend/images/3d-trophy.png" width="15px">
                            <span>Gold</span>
                            <span>•</span>
                            <img src="./../../../css/frontend/images/coin.png" width="15px">
                            <span>1,165,402</span>
                        </div>
                    </div>
                </div>

                <div class="frens-data-count">
                    <span>+63k</span>
                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 5L14.15 10C14.4237 10.2563 14.6419 10.5659 14.791 10.9099C14.9402 11.2539 15.0171 11.625 15.0171 12C15.0171 12.375 14.9402 12.7458 14.791 13.0898C14.6419 13.4339 14.4237 13.7437 14.15 14L9 19" stroke="#ffffff" opacity="0.4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <div class="frens-invite">
        <div class="frens-invite-button">
            <span>Invite a fren</span>
        </div>
    </div> -->



</body>
</template>

<script setup>
import { Head, Link, router } from "@inertiajs/vue3";
import { ref, onMounted, computed } from "vue";


const coins = ref(Number(localStorage.getItem("coins")) || 0);
const coinvalue = computed(() => {
  return coins.value;
});

</script>