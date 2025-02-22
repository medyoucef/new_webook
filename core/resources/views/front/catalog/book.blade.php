<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الحجز</title>
    <!-- Style -->
    <link rel="stylesheet" href="style/style.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/wowjs@1.1.3/dist/wow.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/wowjs@1.1.3/css/libs/animate.min.css" rel="stylesheet">
    <script>
        new WOW().init();
    </script>
</head>

<body>
    <section class="loading" id="loading">
        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="46" viewBox="0 0 150 46" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M47.0155 44.3619V0.696956H47.0183C47.0183 0.31158 46.7067 0 46.3213 0H37.6299C37.3812 0 37.1516 0.133925 37.0259 0.349845L33.5138 6.43386L30.3898 11.8483C30.122 12.3129 29.4496 12.3129 29.1818 11.8483L24.1145 3.07207C23.8467 2.60743 23.1743 2.60743 22.9065 3.07207L17.8392 11.851C17.5714 12.3156 16.899 12.3156 16.6312 11.851L13.5045 6.43386L9.99237 0.349845C9.86665 0.133925 9.63706 0 9.38835 0H0.696952C0.311578 0 0 0.31158 0 0.696956V44.3619C0 44.7473 0.311578 45.0589 0.696952 45.0589H18.1645C18.4132 45.0589 18.6428 44.925 18.7685 44.709L22.901 37.5427C23.1689 37.0781 23.8412 37.0781 24.1091 37.5427L28.2498 44.7118C28.3755 44.925 28.6051 45.0589 28.8538 45.0589H46.3186C46.704 45.0589 47.0155 44.7473 47.0155 44.3619ZM143.547 18.8041L138.141 21.9254C137.676 22.1933 137.676 22.8656 138.141 23.1335L143.547 26.2547L149.65 29.7778C149.866 29.9035 150 30.1331 150 30.3818V44.3592C150 44.7446 149.688 45.0562 149.303 45.0562H131.833C131.584 45.0562 131.355 44.9222 131.229 44.7063L128.96 40.776L127.094 37.5427C126.826 37.0781 126.153 37.0781 125.886 37.5427L121.748 44.709C121.622 44.925 121.392 45.0589 121.144 45.0589H103.676C103.291 45.0589 102.979 44.7473 102.979 44.3619V0.696956C102.979 0.31158 103.291 0 103.676 0H121.144C121.392 0 121.622 0.133925 121.748 0.349845L125.886 7.51619C126.153 7.98083 126.826 7.98083 127.094 7.51619L131.229 0.349845C131.355 0.133925 131.584 0 131.833 0H149.303C149.688 0 150 0.31158 150 0.696956V14.6771C150 14.9258 149.866 15.1554 149.65 15.2811L143.547 18.8041ZM93.303 19.5263L89.1513 21.9233C88.6867 22.1911 88.6867 22.8635 89.1513 23.1313L93.303 25.5283L98.1516 28.327C98.3675 28.4528 98.5014 28.6824 98.5014 28.9311V39.7106C98.5014 39.9594 98.3675 40.1889 98.1516 40.3147L90.1024 44.9638C89.9959 45.0239 89.8756 45.0567 89.7526 45.0567H52.1773C51.792 45.0567 51.4804 44.7451 51.4804 44.3597V0.697559C51.4804 0.312183 51.792 0.000603647 52.1773 0.000603647H89.7526C89.8756 0.000603647 89.9959 0.0334015 90.1024 0.093531L98.1516 4.74263C98.3675 4.86836 98.5014 5.09794 98.5014 5.34666V16.1262C98.5014 16.3749 98.3675 16.6045 98.1516 16.7303L93.303 19.529V19.5263Z"
                fill="#F84878" />
        </svg>
    </section>
    <!-- Start Header -->
    <section class="header">
        <section class="logo">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="150" height="46" viewBox="0 0 150 46" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M47.0155 44.3619V0.696956H47.0183C47.0183 0.31158 46.7067 0 46.3213 0H37.6299C37.3812 0 37.1516 0.133925 37.0259 0.349845L33.5138 6.43386L30.3898 11.8483C30.122 12.3129 29.4496 12.3129 29.1818 11.8483L24.1145 3.07207C23.8467 2.60743 23.1743 2.60743 22.9065 3.07207L17.8392 11.851C17.5714 12.3156 16.899 12.3156 16.6312 11.851L13.5045 6.43386L9.99237 0.349845C9.86665 0.133925 9.63706 0 9.38835 0H0.696952C0.311578 0 0 0.31158 0 0.696956V44.3619C0 44.7473 0.311578 45.0589 0.696952 45.0589H18.1645C18.4132 45.0589 18.6428 44.925 18.7685 44.709L22.901 37.5427C23.1689 37.0781 23.8412 37.0781 24.1091 37.5427L28.2498 44.7118C28.3755 44.925 28.6051 45.0589 28.8538 45.0589H46.3186C46.704 45.0589 47.0155 44.7473 47.0155 44.3619ZM143.547 18.8041L138.141 21.9254C137.676 22.1933 137.676 22.8656 138.141 23.1335L143.547 26.2547L149.65 29.7778C149.866 29.9035 150 30.1331 150 30.3818V44.3592C150 44.7446 149.688 45.0562 149.303 45.0562H131.833C131.584 45.0562 131.355 44.9222 131.229 44.7063L128.96 40.776L127.094 37.5427C126.826 37.0781 126.153 37.0781 125.886 37.5427L121.748 44.709C121.622 44.925 121.392 45.0589 121.144 45.0589H103.676C103.291 45.0589 102.979 44.7473 102.979 44.3619V0.696956C102.979 0.31158 103.291 0 103.676 0H121.144C121.392 0 121.622 0.133925 121.748 0.349845L125.886 7.51619C126.153 7.98083 126.826 7.98083 127.094 7.51619L131.229 0.349845C131.355 0.133925 131.584 0 131.833 0H149.303C149.688 0 150 0.31158 150 0.696956V14.6771C150 14.9258 149.866 15.1554 149.65 15.2811L143.547 18.8041ZM93.303 19.5263L89.1513 21.9233C88.6867 22.1911 88.6867 22.8635 89.1513 23.1313L93.303 25.5283L98.1516 28.327C98.3675 28.4528 98.5014 28.6824 98.5014 28.9311V39.7106C98.5014 39.9594 98.3675 40.1889 98.1516 40.3147L90.1024 44.9638C89.9959 45.0239 89.8756 45.0567 89.7526 45.0567H52.1773C51.792 45.0567 51.4804 44.7451 51.4804 44.3597V0.697559C51.4804 0.312183 51.792 0.000603647 52.1773 0.000603647H89.7526C89.8756 0.000603647 89.9959 0.0334015 90.1024 0.093531L98.1516 4.74263C98.3675 4.86836 98.5014 5.09794 98.5014 5.34666V16.1262C98.5014 16.3749 98.3675 16.6045 98.1516 16.7303L93.303 19.529V19.5263Z"
                        fill="#F84878" />
                </svg>
            </a>
        </section>
    </section>
    <!-- End Header -->

    <!-- Start main page -->
    <main class="main-ticket">
        <a href="#"><i class="fa-solid fa-chevron-right"></i> العودة</a>
        <section class="contain-page">
            <section class="form wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.5s" onchange="formControl()"
                id="ticketForm">
                <form action="">
                    <section class="form-control date-book">
                        <h2>اختر الميعاد</h2>
                        <section class="input">
                       <span id="today"></span><br/>
<select class="select day" id="day">
  <option value="" selected="selected">DD</option>
 </select>
                            <select name="time" id="timeBook" required>
                                <option value="" selected disabled>الوقت</option>
                                <option value="20:00 - 22:00">20:00 - 22:00</option>
                            </select>
                        </section>
                    </section>
                    <section class="form-control tickect-book">
                        <h2>اختر التذكرة</h2>
                        <select name="ticket" id="tickectBook" required>
                            <option value="" selected disabled>التذكرة</option>
                            <option value="Regular - 90SAR">Regular - 90SAR</option>
                            <option value="VIP - 140SAR">VIP - 140SAR</option>
                        </select>
                    </section>
                    <section class="form-control">
                        <h2>عدد التذاكر</h2>
                        <input type="number" name="ticketsNumber" id="ticketsNumber" min="1" required>
                    </section>
                    <button>تأكيد الحجز والمواصلة للدفع</button>
                </form>
            </section>
            <section class="ticket wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.5s">
                <section class="ticket-top">
                    <img src="https://wbk-assets.s3.me-south-1.amazonaws.com/public/uploads/events/mina-nader-in-riyadh-ar-1728565775-poster.jpg"
                        alt="img">
                    <section class="title">
                        <p>مينا نادر في الرياض</p>
                        <span>مسرح كوميدي بود الدور الثاني، حي المروج ، شارع تمير ، مدينة الرياض.</span>
                        <span>26/10/2024 | 20:00 - 22:00</span>
                    </section>
                </section>
                <section class="image" id="imageTicket">
                    <img src="https://webook.com/@wbk/ticketing/empty_tickets.svg" alt="">
                    <p>اختر تذكرة للمتابعة</p>
                </section>
                <section class="request" id="requestTicket">
                    <h2>ملخص الطلب</h2>
                    <p>التذاكر</p>
                    <section class="ticket">
                        <p><span id="tikectsNumber">1</span> <i class="fa-solid fa-x"></i> VIP</p>
                        <span><span id="salary">140</span>ريال سعودي</span>
                    </section>
                    <section class="total">
                        <p>المجموع</p>
                        <span><span id="total">140</span>ريال سعودي</span>
                    </section>
                </section>
            </section>
        </section>
    </main>
    <!-- End main page -->

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
    
    
    
    <script>
        const date = new Date(2020,10,28,15,0,0,0); // today, remove the numbers inside when happy
document.getElementById("today").innerHTML = `Let's say today is ${date.toLocaleString()}`
date.setDate(date.getDate()+2);
let day = date.getDate();
const lastDay = new Date(date.getFullYear(), date.getMonth()+1,0,15,0,0,0).getDate();
const sel = document.getElementById("day");

sel.options[sel.options.length] = new Option(day,day)
day = day+1>lastDay ? 1: day+1
sel.options[sel.options.length] = new Option(day,day)
    </script>
    
    
    
    
    
    
    
</body>

</html>