@extends('guest.layouts.app')

@section('title', "Home")

@section('content')
<div class="guest bg-nf-primary text-slate-50 p-4 shadow-lg">
    <section class="grid grid-cols-[85%_15%] py-2 items-center">
        <div class="flex items-center w-full max-w-md mx-auto bg-slate-50 rounded-full shadow-md p-2">
            <input type="text" placeholder="Cari makanan..." class="w-full text-xs h-6 px-3 py-2 text-gray-700 bg-slate-50 border-none rounded-full focus:ring-2 focus:ring-blue-400 focus:outline-none">
            <button>
                <svg class="w-5 h-5 mx-2 text-nf-primary ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M16 10a6 6 0 11-12 0 6 6 0 0112 0z"/>
                </svg>
            </button>
        </div>
        <button class="flex items-center w-full max-w-md mx-auto">
            <svg class="ml-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M17 18C15.89 18 15 18.89 15 20C15 20.5304 15.2107 21.0391 
                15.5858 21.4142C15.9609 21.7893 16.4696 22 17 22C17.5304 22 18.0391 
                21.7893 18.4142 21.4142C18.7893 21.0391 19 20.5304 19 20C19 19.4696 
                18.7893 18.9609 18.4142 18.5858C18.0391 18.2107 17.5304 18 17 18ZM1 
                2V4H3L6.6 11.59L5.24 14.04C5.09 14.32 5 14.65 5 15C5 15.5304 5.21071 
                16.0391 5.58579 16.4142C5.96086 16.7893 6.46957 17 7 17H19V15H7.42C7.3537 
                15 7.29011 14.9737 7.24322 14.9268C7.19634 14.8799 7.17 14.8163 7.17 14.75C7.17 
                14.7 7.18 14.66 7.2 14.63L8.1 13H15.55C16.3 13 16.96 12.58 17.3 11.97L20.88 
                5.5C20.95 5.34 21 5.17 21 5C21 4.73478 20.8946 4.48043 20.7071 4.29289C20.5196 
                4.10536 20.2652 4 20 4H5.21L4.27 2M7 18C5.89 18 5 18.89 5 20C5 20.5304 5.21071 21.0391 
                5.58579 21.4142C5.96086 21.7893 6.46957 22 7 22C7.53043 22 8.03914 21.7893 8.41421 
                21.4142C8.78929 21.0391 9 20.5304 9 20C9 19.4696 8.78929 18.9609 8.41421 18.5858C8.03914 
                18.2107 7.53043 18 7 18Z" fill="#F8FAFC"/>
            </svg>
        </button>   
    </section>   
    <section>
        <div class="w-full overflow-x-auto whitespace-nowrap py-4 text-slate-50">
            <div class="flex gap-4">
                <div class="w-60 rounded-xl flex flex-col items-center">
                    <img src="/assets/img/nasi-goreng.png" alt="Makanan" class="w-max h-24 object-cover rounded-lg">
                    <h2 class="h2 font-bold mt-2 text-center">Nasi Goreng</h2>
                    <p class="h3 py-1">Rp 25.000</p>
                    <button class="h3 mt-2 px-4 py-2 bg-nf-sixth rounded-full hover:bg-opacity-80 transition">Add to Cart</button>
                </div>
            
                <div class="w-60 rounded-xl flex flex-col items-center">
                    <img src="/assets/img/nasi-bakar.png" alt="Makanan" class="w-max h-24 object-cover rounded-lg">
                    <h2 class="h2 font-bold mt-2 text-center">Nasi Bakar</h2>
                    <p class="h3 py-1">Rp 30.000</p>
                    <button class="h3 mt-2 px-4 py-2 bg-nf-sixth rounded-full hover:bg-opacity-80 transition">Add to Cart</button>
                </div>
            </div>
        </div>
    </section>
    <section class="grid grid-cols-4 gap-x-2 py-2 items-center">
        <button class="flex items-center w-full h-12 max-w-md mx-auto bg-nf-third rounded-xl shadow-md p-2">
            <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 31 31" fill="none">
                <path d="M5.61312 9.60329L6.43645 8.76413C7.35478 7.84579 8.87479 7.84579 9.82479 8.82746L9.85645 
                8.87496C10.6323 9.66663 11.6615 10.0466 12.7856 10.1575C14.3215 10.3 15.8098 11.1233 16.7915 
                12.6116C17.8681 14.3216 17.8523 16.6016 16.7281 18.2958C16.3041 18.9663 15.7339 19.5322 15.0602 
                19.9512C14.3865 20.3701 13.6268 20.6313 12.8379 20.715C12.049 20.7988 11.2514 20.703 10.5048 
                20.4349C9.75812 20.1667 9.08181 19.7332 8.52645 19.1666C7.63979 18.2958 7.13312 17.1716 7.00645 
                16C6.87979 14.8441 6.42062 13.7516 5.61312 12.9441C4.69478 12.0416 4.69478 10.5216 5.61312 
                9.60329ZM12.2631 22.3333C10.4106 22.3333 8.68478 21.6208 7.40228 20.3066C6.29395 19.1666 5.59729 
                17.7416 5.42312 16.19C5.37562 15.715 5.23312 15.0975 4.85312 14.5275C3.90312 15.8416 3.33312 17.425 
                3.33312 19.1666C3.33312 21.7633 4.59979 24.0591 6.54729 25.5H27.0831V23.9166C27.0831 18.2166 23.299 
                13.3875 18.1215 11.8041C19.5306 14.0208 19.499 16.9816 18.0581 19.1666C16.7915 21.1458 14.6065 22.3333 
                12.2631 22.3333ZM20.4015 8.96996H22.4123C23.7898 8.96996 24.9931 9.93579 24.9931 
                11.6616V12.8333H26.9723V11.25C26.9723 8.87496 24.8664 7.06996 22.4123 7.06996H20.4015C19.0873 7.06996 
                17.9631 5.77163 17.9631 4.44163C17.9631 3.11163 19.0873 2.12996 20.4015 2.12996V0.166626C17.9631 0.166626 
                15.9998 2.12996 15.9998 4.56829C15.9998 7.00663 17.9631 8.96996 20.4015 8.96996ZM4.12478 8.95413C4.21978 
                8.79579 4.34645 8.63746 4.48895 8.47913L5.31228 7.65579C5.45478 7.51329 5.61312 7.40246 5.77145 
                7.29163L3.53895 5.02746C3.76062 4.59996 3.68145 4.04579 3.33312 3.68163C3.10638 3.46091 2.80246 
                3.33741 2.48603 3.33741C2.16961 3.33741 1.86569 3.46091 1.63895 3.68163C1.41729 3.90329 1.30645 
                4.17246 1.29062 4.45746C1.00562 4.47329 0.736452 4.58413 0.514785 4.80579C0.0556185 5.26496 0.0556185 
                6.02496 0.514785 6.49996C0.878952 6.84829 1.41728 6.92746 1.86062 6.70579L4.12478 8.95413ZM26.1173 
                3.95079C26.9248 3.14329 27.4314 2.05079 27.4314 0.831626H25.4523C25.4523 2.14579 24.344 3.25413 
                23.0298 3.25413V5.21746C25.9748 5.21746 28.2864 7.62413 28.2864 10.5691V14.4166H30.2498V10.5691C30.2577 
                9.188 29.8736 7.83297 29.1421 6.66144C28.4106 5.48991 27.3617 4.54997 26.1173 3.95079ZM4.91645 
                30.25H27.0831C28.8406 30.25 30.2498 28.8408 30.2498 27.0833H1.74978C1.74978 27.9231 2.08341 28.7286 
                2.67728 29.3225C3.27115 29.9163 4.0766 30.25 4.91645 30.25Z" fill="#F8FAFC"/>
            </svg>
        </button>
        <button class="flex items-center w-full h-12 max-w-md mx-auto bg-nf-fourth rounded-xl shadow-md p-2">
            <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="19" height="24" viewBox="0 0 20 26" fill="none">
                <path d="M16.1649 0.43357C16.2394 0.507883 16.2985 0.596164 16.3388 0.693356C16.3792 0.790548 16.3999 
                0.894742 16.3999 0.99997C16.3999 1.1052 16.3792 1.20939 16.3388 1.30658C16.2985 1.40378 16.2394 1.49206
                 16.1649 1.56637L14.3297 3.39997H16.9281C17.1739 3.40004 17.4137 3.47558 17.6151 3.61637C17.8166 3.75715 
                 17.9699 3.9564 18.0545 4.18717L19.5217 8.18717C19.5881 8.36848 19.6098 8.56314 19.5849 8.75463C19.56 
                 8.94612 19.4893 9.12877 19.3787 9.28708C19.2682 9.44538 19.121 9.57467 18.9498 9.66396C18.7786 9.75325
                  18.5884 9.79991 18.3953 9.79997H17.8529L15.5729 23.1392C15.4457 23.8835 15.0593 24.5588 14.4822 
                  25.0457C13.9051 25.5327 13.1744 25.7998 12.4193 25.8H7.57929C6.82393 25.8002 6.09283 25.5332 
                  5.51539 25.0462C4.93794 24.5593 4.55137 23.8837 4.42409 23.1392L2.14409 9.79997H1.60009C1.40674
                   9.79984 1.21629 9.753 1.04494 9.66342C0.873594 9.57385 0.726428 9.4442 0.615972 9.2855C0.505516
                    9.12681 0.435041 8.94378 0.410547 8.75199C0.386053 8.5602 0.408266 8.36533 0.475293 8.18397L1.95209 
                    4.18397C2.03716 3.9538 2.19075 3.75524 2.39216 3.61505C2.59356 3.47487 2.8331 3.3998 3.07849 
                    3.39997H12.1057C12.1409 3.33912 12.1839 3.28317 12.2337 3.23357L15.0337 0.43357C15.1837 0.283593 
                    15.3872 0.199341 15.5993 0.199341C15.8114 0.199341 16.0149 0.283593 16.1649 0.43357ZM2.17449 
                    8.19997H17.8225L16.6481 4.99997H3.35689L2.17449 8.19997Z" fill="#F8FAFC"/>
            </svg>
        </button>
        <button class="flex items-center w-full h-12 max-w-md mx-auto bg-nf-third rounded-xl shadow-md p-2">
            <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="25" height="22" viewBox="0 0 25 22" fill="none">
                <path d="M13.0015 0.883188C12.3752 0.868055 11.8125 1.19702 11.8304 2.02414L0.947266 10.8632L0.961586 
                11.2155V20.3053L1.54395 20.1689L9.46105 18.3122L9.7372 19.2104L11.2464 19.0406L11.0734 17.933L14.5932 
                17.1078L15.0423 17.6284L16.1514 17.7108L16.1038 16.7539L22.296 15.3003V15.3018C22.3651 15.2917 22.4314 
                15.2754 22.4959 15.2543C22.4971 15.2538 22.498 15.253 22.4991 15.2526L23.556 15.005L23.9226 
                14.9194V14.5544L24.8636 7.0689C25.3151 6.19988 24.5338 4.70996 22.8974 5.03136C23.1387 4.0203 
                20.9178 3.60257 20.2552 4.15538C20.4209 3.23106 18.3568 2.03704 17.6194 3.07948C17.8546 1.9238 
                15.2831 1.0042 14.6311 2.04633C14.5088 1.36317 13.7135 0.900301 13.0014 0.883137L13.0015 0.883188ZM12.4794 
                2.89692C12.5981 3.03961 12.8573 3.17835 13.1602 3.24447C13.4631 3.31048 13.8012 3.30185 13.9918 
                3.25234L14.4457 3.13488L14.5694 3.58876C14.6817 4.00532 14.9174 4.16411 15.3026 4.24739C15.6878
                4.33068 16.2049 4.26466 16.615 4.10135L17.1419 3.8903L17.2561 4.4457C17.3069 4.69381 17.6314 5.00896 
                18.086 5.17253C18.5407 5.33604 19.0585 5.31116 19.2809 5.17253L19.8539 4.81543L19.9951 5.47559C20.0574 
                5.76768 20.2253 5.96969 20.4854 6.11513C20.7455 6.26057 21.0988 6.32902 21.4534 6.28652L21.5677 
                7.22917C21.0276 7.29386 20.4818 7.20058 20.0219 6.94352C19.7143 6.77148 19.4539 6.51046 19.2729 
                6.18973C18.7835 6.3116 18.2489 6.2398 17.7654 6.06582C17.2688 5.88722 16.7872 5.58167 16.5165 
                5.12799C16.0628 5.24418 15.574 5.27597 15.1025 5.17405C14.5924 5.0637 14.0973 4.74556 13.8172 
                4.23297C13.5409 4.25354 13.2507 4.23485 12.9587 4.17102C12.5164 4.07454 12.0664 3.88421 11.7494 
                3.50299L12.4794 2.89677L12.4794 2.89692ZM22.0786 8.79541L22.0834 8.81293C22.1667 8.79338 22.1823 
                8.7977 22.2691 8.86849C22.356 8.93907 22.4793 9.10289 22.585 9.34294C22.791 9.81114 22.9359 10.5427 
                22.9737 11.298V12.1105C22.9481 12.6276 22.8742 13.1197 22.7548 13.5085C22.6663 13.7966 22.5526 14.026 
                22.4422 14.1655C22.3652 14.2629 22.3011 14.3138 22.239 14.3402L1.91059 19.1088V12.6056C8.64509 10.8537 
                15.3681 9.42063 22.0787 8.79552L22.0786 8.79541ZM18.4097 17.7885L17.0672 17.9441L17.8067 19.0263L19.0747 
                18.8009L18.4097 17.7885ZM15.2216 19.0596L13.5966 19.3247L14.1631 19.9817L15.274 20.0642L15.2217 
                19.0596L15.2216 19.0596ZM7.23627 20.5576L7.15375 21.3147L8.2948 21.4638L8.7232 20.6862L7.23632 
                20.5577L7.23627 20.5576ZM12.6905 20.7973L11.4559 20.9576L11.5448 21.7781L13.1539 21.6384L12.6905 
                20.7974L12.6905 20.7973Z" fill="#F8FAFC"/>
            </svg>
        </button>
        <button class="flex items-center w-full h-12 max-w-md mx-auto bg-nf-fourth rounded-xl shadow-md p-2">
            <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24" fill="none">
                <path d="M10.6039 0.729004L10.0774 7.84813L9.8125 7.87088V3.24125H8.1875V7.86925C7.99312 7.85528 7.79914 7.83632 7.60575 7.81238L6.76562 
                0.870379L5.152 1.06538L5.9255 7.45813C5.6746 7.38256 5.42686 7.29691 5.18287 7.20138L4.38662 
                3.6345L2.80225 3.98713L3.293 6.19225C3.49686 6.3362 3.70725 6.47067 3.9235 6.59525C5.03825 
                7.24038 6.72662 7.89688 9 7.89688C11.2734 7.89688 12.9617 7.24038 14.0765 6.59363L13.8035 
                6.74638L14.473 3.68163L12.8854 3.33388L11.9786 7.48575L11.7284 7.55563L12.224 0.846004L10.6039 
                0.729004Z" fill="#F8FAFC"/>
                <path d="M17.1007 6.16951L16.9853 6.34176L16.9284 6.41651L16.9252 6.41976L16.9219 6.42301L16.9122 
                6.43438L16.8813 6.46688L16.7773 6.57738C16.6523 6.70345 16.5222 6.82434 16.3873 6.93976C15.9234 
                7.33964 15.4228 7.69491 14.8923 8.00088C13.5695 8.76788 11.6017 9.52351 9.00004 9.52351C6.39841 
                9.52351 4.43054 8.76788 3.10779 8.00088C2.57723 7.69491 2.07669 7.33964 1.61279 6.93976C1.43998 
                6.79144 1.27509 6.63414 1.11879 6.46851L1.08629 6.43438L1.07816 6.42301L1.07491 6.41976L1.07329 
                6.41813L1.68754 5.88513L1.07166 6.41651L1.01479 6.34176L0.899414 6.16951L2.50329 22.6421C2.52307 
                22.843 2.61689 23.0293 2.76648 23.1647C2.91607 23.3002 3.11072 23.3752 3.31254 23.375H14.6875C14.8894 
                23.3752 15.084 23.3002 15.2336 23.1647C15.3832 23.0293 15.477 22.843 15.4968 22.6421L17.1007 
                6.16951Z" fill="#F8FAFC"/>
            </svg>
        </button>
    </section>
    <section class="flex flex-col gap-4 w-full max-w-md h-auto py-2 rounded-lg overflow-hidden">
        <h2 class="text-base font-bold text-slate-50">Makanan</h2>
        <div class="grid grid-cols-4">
            <div class="col-span-2">
                <img src="/assets/img/nasi-goreng.png" alt="Nasi Goreng" class="w-32 h-20 object-cover rounded-lg">
            </div>
            <div class="col-span-2 flex flex-col justify-center items-start p-1">
                <h2 class="text-sm font-bold text-slate-50">Nasi Goreng</h2>
                <p class="text-xs font-semibold mt-1 ml-2 text-slate-50">Rp 35.000</p>
                <button class="mt-2 px-3 py-1 text-xs font-semibold text-slate-50 bg-yellow-600 rounded-full hover:bg-yellow-700 transition">
                    Add Cart
                </button>
            </div>
        </div>
        <div class="grid grid-cols-4">
            <div class="col-span-2">
                <img src="/assets/img/mie-goreng.png" alt="Mie Goreng Jawa" class="w-32 h-20 object-cover rounded-lg">
            </div>
            <div class="col-span-2 flex flex-col justify-center items-start p-1">
                <h2 class="text-sm font-bold text-slate-50">Mie Goreng Jawa</h2>
                <p class="text-xs font-semibold mt-1 ml-2 text-slate-50">Rp 25.000</p>
                <button class="mt-2 px-3 py-1 text-xs font-semibold text-slate-50 bg-yellow-600 rounded-full hover:bg-yellow-700 transition">
                    Add Cart
                </button>
            </div>
        </div>
        <div class="grid grid-cols-4">
            <div class="col-span-2">
                <img src="/assets/img/katsu.png" alt="Chicken Katsu" class="w-32 h-20 object-cover rounded-lg">
            </div>
            <div class="col-span-2 flex flex-col justify-center items-start p-1">
                <h2 class="text-sm font-bold text-slate-50">Chicken Katsu</h2>
                <p class="text-xs font-semibold mt-1 ml-2 text-slate-50">Rp 30.000</p>
                <button class="mt-2 px-3 py-1 text-xs font-semibold text-slate-50 bg-yellow-600 rounded-full hover:bg-yellow-700 transition">
                    Add Cart
                </button>
            </div>
        </div>
        <div class="grid grid-cols-4">
            <div class="col-span-2">
                <img src="/assets/img/cumi-tepung.png" alt="Cumi Goreng" class="w-32 h-20 object-cover rounded-lg">
            </div>
            <div class="col-span-2 flex flex-col justify-center items-start p-1">
                <h2 class="text-sm font-bold text-slate-50">Cumi Goreng</h2>
                <p class="text-xs font-semibold mt-1 ml-2 text-slate-50">Rp 45.000</p>
                <button class="mt-2 px-3 py-1 text-xs font-semibold text-slate-50 bg-yellow-600 rounded-full hover:bg-yellow-700 transition">
                    Add Cart
                </button>
            </div>
        </div>
        <div class="grid grid-cols-4">
            <div class="col-span-2">
                <img src="/assets/img/nasi.png" alt="Nasi" class="w-32 h-20 object-cover rounded-lg">
            </div>
            <div class="col-span-2 flex flex-col justify-center items-start p-1">
                <h2 class="text-sm font-bold text-slate-50">Nasi</h2>
                <p class="text-xs font-semibold mt-1 ml-2 text-slate-50">Rp 8.000</p>
                <button class="mt-2 px-3 py-1 text-xs font-semibold text-slate-50 bg-yellow-600 rounded-full hover:bg-yellow-700 transition">
                    Add Cart
                </button>
            </div>
        </div>

        <h2 class="text-base font-bold text-slate-50">Minuman</h2>
        <div class="grid grid-cols-4">
            <div class="col-span-2">
                <img src="/assets/img/nasi-goreng.png" alt="Spaghetti Bolognese" class="w-32 h-20 object-cover rounded-lg">
            </div>
            <div class="col-span-2 flex flex-col justify-center items-start p-1">
                <h2 class="text-sm font-bold text-slate-50">Spaghetti Bolognese</h2>
                <p class="text-xs font-semibold mt-1 ml-2 text-slate-50">Rp 35.000</p>
                <button class="mt-2 px-3 py-1 text-xs font-semibold text-slate-50 bg-yellow-600 rounded-full hover:bg-yellow-700 transition">
                    Add Cart
                </button>
            </div>
        </div>
        <div class="grid grid-cols-4">
            <div class="col-span-2">
                <img src="/assets/img/mie-goreng.png" alt="Spaghetti Bolognese" class="w-32 h-20 object-cover rounded-lg">
            </div>
            <div class="col-span-2 flex flex-col justify-center items-start p-1">
                <h2 class="text-sm font-bold text-slate-50">Spaghetti Bolognese</h2>
                <p class="text-xs font-semibold mt-1 ml-2 text-slate-50">Rp 35.000</p>
                <button class="mt-2 px-3 py-1 text-xs font-semibold text-slate-50 bg-yellow-600 rounded-full hover:bg-yellow-700 transition">
                    Add Cart
                </button>
            </div>
        </div>
        <div class="grid grid-cols-4">
            <div class="col-span-2">
                <img src="/assets/img/katsu.png" alt="Spaghetti Bolognese" class="w-32 h-20 object-cover rounded-lg">
            </div>
            <div class="col-span-2 flex flex-col justify-center items-start p-1">
                <h2 class="text-sm font-bold text-slate-50">Spaghetti Bolognese</h2>
                <p class="text-xs font-semibold mt-1 ml-2 text-slate-50">Rp 35.000</p>
                <button class="mt-2 px-3 py-1 text-xs font-semibold text-slate-50 bg-yellow-600 rounded-full hover:bg-yellow-700 transition">
                    Add Cart
                </button>
            </div>
        </div>
        <div class="grid grid-cols-4">
            <div class="col-span-2">
                <img src="/assets/img/cumi-tepung.png" alt="Spaghetti Bolognese" class="w-32 h-20 object-cover rounded-lg">
            </div>
            <div class="col-span-2 flex flex-col justify-center items-start p-1">
                <h2 class="text-sm font-bold text-slate-50">Spaghetti Bolognese</h2>
                <p class="text-xs font-semibold mt-1 ml-2 text-slate-50">Rp 35.000</p>
                <button class="mt-2 px-3 py-1 text-xs font-semibold text-slate-50 bg-yellow-600 rounded-full hover:bg-yellow-700 transition">
                    Add Cart
                </button>
            </div>
        </div>
        <div class="grid grid-cols-4">
            <div class="col-span-2">
                <img src="/assets/img/nasi.png" alt="Spaghetti Bolognese" class="w-32 h-20 object-cover rounded-lg">
            </div>
            <div class="col-span-2 flex flex-col justify-center items-start p-1">
                <h2 class="text-sm font-bold text-slate-50">Spaghetti Bolognese</h2>
                <p class="text-xs font-semibold mt-1 ml-2 text-slate-50">Rp 35.000</p>
                <button class="mt-2 px-3 py-1 text-xs font-semibold text-slate-50 bg-yellow-600 rounded-full hover:bg-yellow-700 transition">
                    Add Cart
                </button>
            </div>
        </div>
    </section>
</div>
@endsection