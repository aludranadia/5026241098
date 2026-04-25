<!-- Aludra Nadia Salwa | 5026241098 | PWEB (B) -->
<!-- Tugas Remake Linktree -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>@mantappuacademy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function showme() {
            // alert("Halo, Selamat Siang!"); //
            Swal.fire({
                title: "Halo!",
                text: "Selamat Siang.",
                icon: "success"
            });
            console.log("Ini baris 22, sudah sampai di sini");
            a = 22 + 10;
            console.log("Hasil Penjumlahan: " + a);
            c = 1 * 2 * 3;
            console.log("Hasil Perkalian: " + c);
        }

        function changeText() {
            const element = document.getElementById("intro");
            element.innerHTML = "Sistem Informasi ITS";
            // document.getElementById("intro").innerHTML = "Sistem Informasi ITS" //
        }

        function changeStyle() {
            const element = document.getElementById("tombol");
            element.style.color = "red";
            element.style.background = "yellow";
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            background-color: #171d80;
            font-family: 'Poppins', sans-serif;
            color: #f5f6f7;
        }

        .center-panel {
            max-width: 36.25rem;
            margin: 0 auto;
            min-height: 100vh;
            background-image: url('https://ugc.production.linktr.ee/e8655fcd-d9ac-44fe-8bf3-3c53558476ac_4.png');
            background-size: cover;
            background-position: top center;
            overflow-x: hidden;
        }

        @media (min-width: 36rem) {
            .center-panel {
                margin-top: 2.5rem;
                min-height: calc(100vh - 2.5rem);
                border-radius: 1.5rem 1.5rem 0 0;
                box-shadow: 0 1.5rem 2rem rgba(0, 0, 0, 0.15);
            }

            .links-section {
                padding: 0 2.5rem !important;
            }
        }

        .topbar {
            padding: 2rem 2rem 0;
        }

        .topbar-btn {
            width: 2.5rem;
            height: 2.5rem;
            background: rgba(255, 255, 255, 0.7);
            color: #000;
            transition: background 0.2s;
        }

        /* agar pada saat dipencet menjadi bewarna putih */
        .topbar-btn:hover {
            background: #ffffff;
        }

        .icon-logo {
            width: 1.125rem;
            height: 1.125rem;
        }

        .icon-share {
            width: 1.25rem;
            height: 1.25rem;
        }

        .profile-title {
            font-weight: 600;
            font-size: 1.25rem;
            letter-spacing: -0.02rem;
        }

        .profile-desc {
            font-weight: 500;
            font-size: 0.875rem;
            line-height: 1.5;
            max-width: 22rem;
            margin: 0 auto;
        }

        .social-icon-btn {
            color: #f5f6f7;
            transition: transform 0.2s;
        }

        .social-icon-btn:hover {
            transform: scale(1.1);
            color: #f5f6f7;
        }

        .icon-social {
            width: 2rem;
            height: 2rem;
        }

        .link-btn {
            background-color: #f5f6f7;
            color: #0f1eaf;
            border-radius: 1rem;
            min-height: 4rem;
            box-shadow: 0 0.25rem 0.375rem rgba(0, 0, 0, 0.05);
            transition: background-color 0.15s;
            overflow: hidden;
        }

        /* agar pada saat dipencet menjadi lebih gelap */
        .link-btn:hover {
            background-color: #e2e8f0;
            color: #0f1eaf;
            text-decoration: none;
        }

        .link-thumb {
            flex: 0 0 3rem;
            height: 3rem;
            object-fit: cover;
            border-radius: 0.5rem;
        }

        .link-more {
            flex: 0 0 3rem;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0.5;
        }

        .icon-more {
            width: 1.25rem;
            height: 1.25rem;
        }

        .link-label {
            font-size: 0.875rem;
            font-weight: 500;
            line-height: 1.3;
            padding: 0 1rem;
            margin: 0;
            min-width: 0;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .footer-text {
            font-size: 0.75rem;
            font-weight: 500;
            opacity: 0.9;
        }

        .footer-dot {
            color: rgba(245, 246, 247, 0.5);
        }
    </style>
</head>

<body>

    <div class="center-panel pb-4">

        <!-- header icon linktree & share -->
        <div class="d-flex justify-content-between align-items-center topbar sticky-top">
            <div
                class="topbar-btn rounded-circle d-flex align-items-center justify-content-center cursor-pointer border border-white">
                <svg class="icon-logo" fill="none" viewBox="0 0 28 28">
                    <!-- path yang sama seperti di inspect website asli untuk icon linktree -->
                    <path
                        d="m15.7603 6.829 4.6725-4.80317 2.712 2.77734-4.9012 4.67248h6.8944v3.85565h-6.9271l4.9339 4.7922-2.712 2.7229-6.6983-6.731-6.69829 6.731-2.712-2.712 4.93387-4.7923h-6.92703v-3.86645h6.89436l-4.9012-4.67248 2.712-2.77734 4.67249 4.80317v-6.829h4.0516zm-4.0516 12.0243h4.0516v9.1489h-4.0516z"
                        fill="currentColor" />
                </svg>
            </div>
            <div
                class="topbar-btn rounded-circle d-flex align-items-center justify-content-center cursor-pointer border border-white">
                <svg class="icon-share" fill="currentColor" viewBox="0 0 256 256">
                    <!-- path yang sama seperti di inspect website asli untuk icon share -->
                    <path
                        d="M216,112v96a16,16,0,0,1-16,16H56a16,16,0,0,1-16-16V112A16,16,0,0,1,56,96H80a8,8,0,0,1,0,16H56v96H200V112H176a8,8,0,0,1,0-16h24A16,16,0,0,1,216,112ZM93.66,69.66,120,43.31V136a8,8,0,0,0,16,0V43.31l26.34,26.35a8,8,0,0,0,11.32-11.32l-40-40a8,8,0,0,0-11.32,0l-40,40A8,8,0,0,0,93.66,69.66Z" />
                </svg>
            </div>
        </div>

        <!-- profile -->
        <div class="text-center px-4 pt-2 pb-3">
            <!-- mengambil dari inspect logo mantappu -->
            <img src="https://ugc.production.linktr.ee/428d6c86-9b2c-4068-86ed-edc41467edd3_Logo-Icon-Transparant.png"
                alt="Mantappu Academy" class="rounded-circle mb-3 object-fit-contain"
                style="width: 6rem; height: 6rem;">
            <h1 id="intro" class="profile-title mb-2">@mantappuacademy</h1>
            <p class="profile-desc">REGISTER NOW: INTER EXAMS PREP • TKA SD • TKA SMP • SNBT • TO OFFLINE SNBT 🔥</p>
        </div>

        <!-- sosial media -->
        <div class="d-flex justify-content-center flex-wrap mx-auto mb-4" style="max-width: 15rem;">
            <a href="https://instagram.com/mantappuacademy" class="social-icon-btn p-2" title="Instagram">
                <svg class="icon-social" fill="currentColor" viewBox="0 0 24 24">
                    <!-- path yang sama seperti di inspect website asli untuk icon Instagram -->
                    <path
                        d="M12 2C9.2912 2 8.94131 2 7.86907 2.05643C7.03985 2.07241 6.21934 2.22888 5.44244 2.51919C4.78781 2.77878 4.23476 3.11738 3.67043 3.68172C3.11738 4.23476 2.76749 4.78781 2.51919 5.45372C2.27088 6.08578 2.10158 6.80813 2.05643 7.88036C2.01129 8.94131 2 9.27991 2 12C2 14.7088 2 15.0474 2.05643 16.1196C2.10158 17.1919 2.28217 17.9255 2.51919 18.5576C2.77878 19.2122 3.11738 19.7652 3.67043 20.3296C4.23476 20.8826 4.78781 21.2325 5.44244 21.4808C6.08578 21.7291 6.80813 21.8984 7.86907 21.9436C8.94131 21.9887 9.27991 22 12 22C14.7088 22 15.0474 22 16.1196 21.9436C17.1806 21.8984 17.9142 21.7178 18.5463 21.4808C19.2137 21.2306 19.8184 20.8377 20.3183 20.3296C20.8826 19.7652 21.2212 19.2009 21.4695 18.5576C21.7178 17.9142 21.8871 17.1919 21.9436 16.1196C21.9887 15.0587 22 14.7201 22 12C22 9.2912 21.9887 8.9526 21.9436 7.88036C21.9225 7.05065 21.7622 6.23037 21.4695 5.45372C21.2189 4.78649 20.8261 4.18182 20.3183 3.68172C19.754 3.11738 19.2122 2.77878 18.5463 2.51919C17.7686 2.23315 16.9482 2.08051 16.1196 2.06772C15.0474 2.01129 14.7088 2 12 2ZM11.0971 3.80587H12C14.6637 3.80587 14.9797 3.80587 16.0406 3.8623C16.6724 3.8686 17.2985 3.98313 17.8916 4.2009C18.3657 4.38149 18.693 4.59594 19.0429 4.94582C19.3928 5.29571 19.6072 5.63431 19.7991 6.09706C19.9345 6.45824 20.0925 6.97743 20.1377 7.95937C20.1828 9.00903 20.1941 9.32506 20.1941 12C20.1941 14.6637 20.1941 14.9797 20.1377 16.0406C20.1314 16.6724 20.0169 17.2985 19.7991 17.8916C19.6185 18.3657 19.3928 18.693 19.0429 19.0429C18.7043 19.3928 18.3657 19.6072 17.8916 19.7878C17.2992 20.0094 16.6731 20.1278 16.0406 20.1377C14.9797 20.1828 14.6637 20.1941 12 20.1941C9.32506 20.1941 9.00903 20.1941 7.95937 20.1377C7.3238 20.1322 6.69388 20.0177 6.09706 19.7991C5.63431 19.6072 5.307 19.3928 4.94582 19.0429C4.60722 18.7043 4.38149 18.3657 4.2009 17.8916C3.98313 17.2985 3.8686 16.6724 3.8623 16.0406C3.80587 14.9797 3.79458 14.6637 3.79458 12C3.79458 9.32506 3.80587 9.00903 3.85102 7.95937C3.85602 7.32375 3.97057 6.69376 4.18962 6.09706C4.38149 5.63431 4.59594 5.307 4.94582 4.94582C5.29571 4.60722 5.62302 4.38149 6.09706 4.2009C6.69376 3.98185 7.32375 3.86731 7.95937 3.8623C8.87359 3.81716 9.23476 3.80587 11.0971 3.79458V3.80587ZM17.3386 5.46501C17.1815 5.46501 17.0259 5.49596 16.8808 5.55608C16.7356 5.6162 16.6037 5.70433 16.4926 5.81542C16.3815 5.92652 16.2934 6.05841 16.2333 6.20356C16.1732 6.34871 16.1422 6.50429 16.1422 6.6614C16.1422 6.81851 16.1732 6.97408 16.2333 7.11924C16.2934 7.26439 16.3815 7.39628 16.4926 7.50737C16.6037 7.61847 16.7356 7.70659 16.8808 7.76672C17.0259 7.82684 17.1815 7.85779 17.3386 7.85779C17.6559 7.85779 17.9602 7.73174 18.1846 7.50737C18.4089 7.28301 18.535 6.9787 18.535 6.6614C18.535 6.3441 18.4089 6.03979 18.1846 5.81542C17.9602 5.59106 17.6559 5.46501 17.3386 5.46501ZM12 6.86456C11.3256 6.86456 10.6578 6.99739 10.0348 7.25547C9.41169 7.51355 8.84556 7.89182 8.36869 8.36869C7.89182 8.84556 7.51355 9.41169 7.25547 10.0348C6.99739 10.6578 6.86456 11.3256 6.86456 12C6.86456 12.6744 6.99739 13.3422 7.25547 13.9652C7.51355 14.5883 7.89182 15.1544 8.36869 15.6313C8.84556 16.1082 9.41169 16.4864 10.0348 16.7445C10.6578 17.0026 11.3256 17.1354 12 17.1354C13.362 17.1354 14.6682 16.5944 15.6313 15.6313C16.5944 14.6682 17.1354 13.362 17.1354 12C17.1354 10.638 16.5944 9.33178 15.6313 8.36869C14.6682 7.40561 13.362 6.86456 12 6.86456ZM12 8.67043C12.4372 8.67043 12.8702 8.75655 13.2742 8.92388C13.6781 9.0912 14.0452 9.33646 14.3544 9.64564C14.6635 9.95482 14.9088 10.3219 15.0761 10.7258C15.2434 11.1298 15.3296 11.5628 15.3296 12C15.3296 12.4372 15.2434 12.8702 15.0761 13.2742C14.9088 13.6781 14.6635 14.0452 14.3544 14.3544C14.0452 14.6635 13.6781 14.9088 13.2742 15.0761C12.8702 15.2434 12.4372 15.3296 12 15.3296C11.1169 15.3296 10.2701 14.9788 9.64564 14.3544C9.02122 13.7299 8.67043 12.8831 8.67043 12C8.67043 11.1169 9.02122 10.2701 9.64564 9.64564C10.2701 9.02122 11.1169 8.67043 12 8.67043Z" />
                </svg>
            </a>
            <a href="https://api.whatsapp.com/send?phone=6285121115200" class="social-icon-btn p-2" title="WhatsApp">
                <svg class="icon-social" fill="currentColor" viewBox="0 0 24 24">
                    <!-- path yang sama seperti di inspect website asli untuk icon WhatsApp -->
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M19.7945 4.21258C17.7267 2.14211 14.9765 1.00129 12.0462 1.00024C6.00812 1.00024 1.09402 5.91382 1.09192 11.9535C1.09087 13.8842 1.59562 15.7688 2.55417 17.4296L1 23.1063L6.807 21.5831C8.40685 22.4561 10.2084 22.9157 12.0415 22.9162H12.0462C18.0832 22.9162 22.9979 18.0021 23 11.9624C23.001 9.03532 21.8628 6.28359 19.7945 4.21311V4.21258ZM12.0462 21.0663H12.0425C10.409 21.0658 8.80658 20.6267 7.40842 19.7973L7.07592 19.5999L3.62986 20.5038L4.54954 17.1438L4.33314 16.7993C3.42186 15.3497 2.94022 13.6741 2.94127 11.954C2.94337 6.93435 7.0276 2.85012 12.0499 2.85012C14.4817 2.85117 16.7676 3.79922 18.4866 5.52042C20.2058 7.24109 21.1517 9.52903 21.1507 11.9614C21.1485 16.9816 17.0643 21.0658 12.0462 21.0658V21.0663ZM17.0401 14.2477C16.7665 14.1107 15.4209 13.4488 15.1698 13.3575C14.9187 13.266 14.7365 13.2204 14.5542 13.4945C14.372 13.7687 13.8473 14.3854 13.6876 14.5676C13.5279 14.7504 13.3682 14.773 13.0946 14.6358C12.821 14.4988 11.9391 14.2099 10.8933 13.2776C10.0798 12.5517 9.53032 11.6557 9.3707 11.3815C9.21101 11.1073 9.35389 10.9592 9.49041 10.8232C9.61331 10.7003 9.76407 10.5033 9.90114 10.3436C10.0383 10.184 10.0834 10.0695 10.1748 9.88721C10.2662 9.70442 10.2205 9.5448 10.1522 9.40767C10.0839 9.27059 9.53667 7.92334 9.30818 7.37554C9.08598 6.84191 8.86017 6.91439 8.69261 6.90547C8.53292 6.89758 8.35069 6.89601 8.16791 6.89601C7.98512 6.89601 7.68886 6.96429 7.43781 7.23847C7.18677 7.51261 6.47978 8.17493 6.47978 9.52164C6.47978 10.8683 7.46042 12.1704 7.59749 12.3532C7.73457 12.536 9.52769 15.3003 12.2731 16.4863C12.926 16.7683 13.436 16.9369 13.8336 17.063C14.4891 17.2715 15.0857 17.2421 15.5574 17.1717C16.0832 17.0929 17.1767 16.5094 17.4047 15.8702C17.6326 15.2309 17.6326 14.6826 17.5644 14.5686C17.4961 14.4546 17.3133 14.3858 17.0396 14.2488L17.0401 14.2477Z" />
                </svg>
            </a>
            <a href="https://tiktok.com/@mantappuacademy" class="social-icon-btn p-2" title="TikTok">
                <svg class="icon-social" fill="currentColor" viewBox="0 0 24 24">
                    <!-- path yang sama seperti di inspect website asli untuk icon Tiktok -->
                    <path
                        d="M15.9453 8.68918V15.6727C15.9453 19.1598 13.1048 22.0004 9.6177 22.0004C8.27369 22.0004 7.01685 21.5717 5.99251 20.8525C4.35796 19.7047 3.29004 17.8085 3.29004 15.6727C3.29004 12.1783 6.12333 9.34505 9.6104 9.34505C9.90101 9.34505 10.1843 9.36685 10.4676 9.40318V12.9121H10.4386C10.3151 12.8758 10.1843 12.8394 10.0536 12.8177H9.9954C9.86466 12.8032 9.74114 12.7813 9.60309 12.7813C8.00491 12.7813 6.70448 14.0817 6.70448 15.6799C6.70448 17.2782 8.00491 18.5786 9.60309 18.5786C11.2014 18.5786 12.5018 17.2782 12.5018 15.6799V2.00037H15.938C15.938 2.29822 15.9671 2.58881 16.0179 2.87213C16.2649 4.1798 17.035 5.30584 18.1175 6.01053C18.873 6.50452 19.7593 6.78785 20.7182 6.78785V10.2241C18.9416 10.2241 17.288 9.65222 15.9453 8.68918Z" />
                </svg>
            </a>
            <a href="https://www.youtube.com/@MantappuAcademy" class="social-icon-btn p-2" title="YouTube">
                <svg class="icon-social" fill="currentColor" viewBox="0 0 24 24">
                    <!-- path yang sama seperti di inspect website asli untuk icon Youtube -->
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M19.8142 5.41679C20.6763 5.64906 21.3541 6.32675 21.5832 7.18581C22 8.74483 22 11.9997 22 11.9997C22 11.9997 22 15.2545 21.5832 16.8136C21.3509 17.6757 20.6733 18.3535 19.8142 18.5825C18.2551 18.9993 12 18.9993 12 18.9993C12 18.9993 5.74801 18.9993 4.18581 18.5825C3.32358 18.3502 2.64588 17.6726 2.4168 16.8136C2 15.2545 2 11.9997 2 11.9997C2 11.9997 2 8.74483 2.4168 7.18581C2.64907 6.32358 3.32676 5.64588 4.18581 5.41679C5.74801 5 12 5 12 5C12 5 18.2551 5 19.8142 5.41679ZM15.1961 11.9992L10.0004 14.9994V8.99883L15.1961 11.9992Z" />
                </svg>
            </a>
        </div>

        <!-- links button -->
        <div class="links-section px-3 d-flex flex-column" style="gap: 1rem;">

            <a id="tombol" href="https://loket.com/event/ma-inter" target="_blank"
                class="link-btn d-flex align-items-center justify-content-between p-2 text-decoration-none">
                <!-- mengambil dari inspect gambar button pertama -->
                <img src="https://ugc.production.linktr.ee/ef3d28c8-da6f-463a-b040-ab71ca724ab6_1--2-.png" alt="Icon"
                    class="link-thumb">
                <p class="link-label flex-grow-1 text-center">INTERNATIONAL ONLINE EXAMS PREP (IGCSE/AS LEVEL & IB DP AA
                    SL)</p>
                <div class="link-more">
                    <svg class="icon-more" viewBox="0 0 3 11" fill="none" onclick="showme();">
                        <!-- path yang sama seperti di inspect website asli untuk icon titik tiga -->
                        <path fill="#0F1EAF"
                            d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 6.66667 1.33333 6.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z" />
                    </svg>
                </div>
            </a>

            <button class="btn btn-primary" onclick="showme();">Show Me</button>
            <button class="btn btn-primary" onclick="changeText();">Change Text</button>
            <button class="btn btn-primary" onclick="changeStyle();">Change Style</button>

            <a href="https://loket.com/event/snbt-ma" target="_blank"
                class="link-btn d-flex align-items-center justify-content-between p-2 text-decoration-none">
                <!-- mengambil dari inspect gambar button kedua -->
                <img src="https://ugc.production.linktr.ee/b080ee6b-5230-4c43-aac9-490b4043871d_2--1-.png" alt="Icon"
                    class="link-thumb">
                <p class="link-label flex-grow-1 text-center">PERSIAPAN INTENSIF SNBT PK - PM - PU</p>
                <div class="link-more">
                    <svg class="icon-more" viewBox="0 0 3 11" fill="none">
                        <!-- path yang sama seperti di inspect website asli untuk icon titik tiga -->
                        <path fill="#0F1EAF"
                            d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 6.66667 1.33333 6.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z" />
                    </svg>
                </div>
            </a>

            <a href="https://linktr.ee/ambismantappu" target="_blank"
                class="link-btn d-flex align-items-center justify-content-between p-2 text-decoration-none">
                <!-- mengambil dari inspect gambar button ketiga -->
                <img src="https://ugc.production.linktr.ee/de4b5984-fd90-4da8-b921-c94d0995383a_tka-sd-smp.png"
                    alt="Icon" class="link-thumb">
                <p class="link-label flex-grow-1 text-center">PERSIAPAN TKA SD &amp; SMP</p>
                <div class="link-more">
                    <svg class="icon-more" viewBox="0 0 3 11" fill="none">
                        <!-- path yang sama seperti di inspect website asli untuk icon titik tiga -->
                        <path fill="#0F1EAF"
                            d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 6.66667 1.33333 6.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z" />
                    </svg>
                </div>
            </a>

            <a href="https://linktr.ee/masterclass_ma" target="_blank"
                class="link-btn d-flex align-items-center justify-content-between p-2 text-decoration-none">
                <!-- mengambil dari inspect gambar button keempat -->
                <img src="https://ugc.production.linktr.ee/cc7b6eab-614e-48ce-bddd-7379f2bfd043_Group-12.png" alt="Icon"
                    class="link-thumb">
                <p class="link-label flex-grow-1 text-center">MASTERCLASS ONLINE 7-8 SMP &amp; 10-11 SMA</p>
                <div class="link-more">
                    <svg class="icon-more" viewBox="0 0 3 11" fill="none">
                        <!-- path yang sama seperti di inspect website asli untuk icon titik tiga -->
                        <path fill="#0F1EAF"
                            d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 6.66667 1.33333 6.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z" />
                    </svg>
                </div>
            </a>

            <a href="https://api.whatsapp.com/send/?phone=62811210702&text=Halo%2C+aku+tertarik+dengan+program+SNBT%2C+boleh+minta+detail+kelasnya%3F&type=phone_number&app_absent=0"
                target="_blank"
                class="link-btn d-flex align-items-center justify-content-between p-2 text-decoration-none">
                <!-- mengambil dari inspect gambar button kelima -->
                <img src="https://ugc.production.linktr.ee/38155d94-5816-4714-a4e1-f95da6e8e0a3_537463511-1629183681374668-7968943716385949242-n.jpeg"
                    alt="Icon" class="link-thumb">
                <p class="link-label flex-grow-1 text-center">Konsultasi Program SNBT dengan Minappu</p>
                <div class="link-more">
                    <svg class="icon-more" viewBox="0 0 3 11" fill="none">
                        <!-- path yang sama seperti di inspect website asli untuk icon titik tiga -->
                        <path fill="#0F1EAF"
                            d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 6.66667 1.33333 6.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z" />
                    </svg>
                </div>
            </a>

            <a href="https://wa.me/62811210702?text=Halo,%20aku%20mau%20tanya-tanya%20tentang%20program%20Math%20Clinic"
                target="_blank"
                class="link-btn d-flex align-items-center justify-content-between p-2 text-decoration-none">
                <!-- mengambil dari inspect gambar button keenam -->
                <img src="https://ugc.production.linktr.ee/a8caddd3-45e6-4639-ae2c-032a528a1d1b_488657302-1834105280569744-795990005505321194-n.jpeg"
                    alt="Icon" class="link-thumb">
                <p class="link-label flex-grow-1 text-center">Konsultasi Program Math Clinic dengan Minappu</p>
                <div class="link-more">
                    <svg class="icon-more" viewBox="0 0 3 11" fill="none">
                        <!-- path yang sama seperti di inspect website asli untuk icon titik tiga -->
                        <path fill="#0F1EAF"
                            d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 6.66667 1.33333 6.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z" />
                    </svg>
                </div>
            </a>

        </div>

        <!-- footer -->
        <div class="text-center mt-5 pb-5 footer-text">
            <a href="#" class="text-white text-decoration-none">Cookie Preferences</a>
            <span class="mx-1 footer-dot">•</span>
            <a href="#" class="text-white text-decoration-none">Report</a>
            <span class="mx-1 footer-dot">•</span>
            <a href="https://linktr.ee/privacy" target="_blank" class="text-white text-decoration-none">Privacy</a>
        </div>

    </div>

</body>

</html>
