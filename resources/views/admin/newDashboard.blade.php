<body>

<nav class="navbar">
    <a href="#" class="navbar-brand"><i class="icofont-triangle"></i><span>ResPay</span></a>
    <ul class="navbar-nav">
        <li class="active">
            <a><i class="icofont-home"></i><span>Home</span></a>
        </li>
        <li>
            <a><i class="icofont-pie-chart"></i><span>Charts</span></a>
        </li>
        <li>
            <a><i class="icofont-ui-messaging"></i><span>Messages</span></a>
        </li>
        <li>
            <a><i class="icofont-money"></i><span>Wallet</span></a>
        </li>
    </ul>
    <a href="#" id="expander" class="navbar-footer"><i class="icofont-rounded-double-right"></i></a>
</nav>

<main>
    <div class="mainRadiusTop"></div>
    <header>
        <section role="search">
            <form action="#" method="get">
                <div class="form-inline">
                    <i class="icofont-search"></i>
                    <input type="search" placeholder="Search">
                </div>
            </form>
        </section>
        <section role="application">
            <nav class="navbar-top">
                <a href="#">Feedback</a>
                <a href="#">Contacts</a>
                <a href="#">Help</a>
            </nav>
            <div class="notification-profile">
                <a href="#" class="notification"><i class="icofont-alarm"></i></a>
                <a href="#">
                    <div class="profile-pic"></div>
                </a>
            </div>
        </section>
    </header>
    <div class="tabContainer">
        <div class="tab">
            <a href="#" id="tabCharts" class="active"><i class="icofont-chart-histogram"></i></a>
            <a href="#" id="tabCreditCard" class=""><i class="icofont-credit-card"></i></a>
        </div>
    </div>
    <div class="wrapper">
        <section role="region">
            <div class="info-box-container">
                <div class="info-box">
                    <svg width="131" height="95" viewBox="0 0 131 95" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                                d="M126.202 30.503C100.847 39.2296 97.0315 2.99999 58.9733 3C26.6742 3 29.1336 43.4671 4.65875 54.8462V95H126.202V30.503Z"
                                fill="#F1F3FF" />
                        <path
                                d="M1.74817 56.1231C29.0539 46.5109 25.2615 3.07825 58.6351 3.07825C98.456 3.07824 100.731 42.9509 129.554 29.0667"
                                stroke="#3326AE" stroke-width="5" />
                    </svg>
                    <div class="info-content">
                        <span class="header">visitors</span>
                        <span class="value">10,320</span>
                    </div>

                </div>
                <div class="info-box">
                    <svg width="126" height="96" viewBox="0 0 126 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                                d="M47.1375 50.071C18.479 50.071 16.343 3.07825 0.678741 3.07825V95.2837H123.679V15.0044C123.679 15.0044 118.161 8.24033 105.522 8.24033C79.89 8.24033 75.796 50.071 47.1375 50.071Z"
                                fill="#F1F3FF" />
                        <path
                                d="M0.678741 3.07825C16.343 3.07825 18.479 50.071 47.1375 50.071C75.796 50.071 79.89 8.24033 105.522 8.24033C118.161 8.24033 123.679 15.0044 123.679 15.0044"
                                stroke="#3326AE" stroke-width="5" />
                    </svg>

                    <div class="info-content">
                        <span class="header">customers</span>
                        <span class="value">4,628</span>
                    </div>

                </div>
                <div class="info-box active">

                    <svg width="130" height="91" viewBox="0 0 130 91" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                                d="M103.579 21.0406C78.8364 21.0406 75.6324 0.570251 48.3979 0.570251C19.3288 0.570251 24.7401 23.1087 2.8292 24.3678V90.1057H125.295V14.0066C121.79 16.8538 114.739 21.0406 103.579 21.0406Z"
                                fill="#F1F3FF" />
                        <path
                                d="M0.693176 27.0927C24.9016 27.0927 18.3155 3.2403 48.2199 3.2403C75.4544 3.2403 78.6584 23.7106 103.401 23.7106C120.311 23.7106 127.787 14.0985 127.787 14.0985"
                                stroke="#3326AE" stroke-width="5" stroke-linejoin="bevel" />
                    </svg>

                    <div class="info-content">
                        <span class="header">orders</span>
                        <span class="value">2,980</span>
                    </div>

                </div>
            </div>
            <div class="statistics">
                <header>
                    <h1>Statistics</h1>
                    <select>
                        <option value="Year">Year</option>
                        <option value="Month">Month</option>
                        <option value="Day">Day</option>
                    </select>
                </header>
                <!-- For resizing issues -->
                <div class="chartContainer">
                    <canvas id="statisticsChart"></canvas>
                </div>
            </div>
            <div class="bottomBox">
                <div class="spentTime">
                    <header>
                        <h1>Spent time</h1>
                    </header>
                    <!-- For resizing issues -->
                    <div class="chartContainer">
                        <canvas id="spentTimeChart" style="background-color: rgba(0,0,0, .0);"></canvas>
                    </div>
                </div>
                <div class="tweet">
                    <div class="profileContainer">
                        <div class="profileImage"></div>
                        <div class="profileInfo">
                            <span class="name">Lilly Danovan</span>
                            <span class="title">Businness trainer</span>
                        </div>
                    </div>
                    <h1>How to properly manage your personal budget?</h1>
                    <div class="badgesContainer">
                        <div class="tweetBadge">
                            <i class="icofont-play-alt-1"></i><span>Video</span>
                        </div>
                        <div class="tweetBadge">
                            <i class="icofont-clock-time"></i><span>15 mins</span>
                        </div>
                        <div class="tweetBadge">
                            <i class="icofont-star"></i><span>12 likes</span>
                        </div>
                    </div>
                    <div class="tweetBottomContainer">
                        <span class="time">5 days ago</span>
                        <a href="#" class="connect">Connect<i class="icofont-rounded-right"></i></a>
                    </div>
                </div>
            </div>

        </section>

        <aside>
            <div class="editContainer">
                <a><i class="icofont-edit"></i></a>
            </div>

            <!-- For resizing issues -->
            <div class="chartContainer">
                <span>$10,600</span>
                <canvas id="asideChart"></canvas>
            </div>

            <div class="header">
                <h1>My card</h1>
                <i>..</i>
            </div>
            <div class="cardContainer">
                <svg width="250" viewBox="0 0 288 206" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_d)">
                        <path d="M37 161.5H158.5V143H98.5H37V161.5Z" fill="#3326AE"/>
                    </g>
                    <path d="M36.5 161.5H158H164.5L161 89.5C124.167 59.6667 47.7 1 36.5 1C21.7 1 17 13.3333 16.5 20V143C16.5 155.4 29.8333 160.5 36.5 161.5Z" fill="#3326AE"/>
                    <g filter="url(#filter1_d)">
                        <path d="M248 161.5V140H158V161.5H248Z" fill="#FFC005"/>
                    </g>
                    <path d="M269.995 140V81L246.996 40L86 49C143.999 66.2 158.167 131.333 158 161.5H247C265.8 161.5 270.162 147 269.995 140Z" fill="#FFC005"/>
                    <path d="M270 22C270 4.8 254.833 0.833327 247.5 0.999994L36 1C28 1 23.5 5 22 7C35.5 27 80.5 47 105.5 59C130.5 71 184.5 55.5 222 55.5C252 55.5 266.667 72.6667 270 81.5V22Z" fill="#00C3F8"/>
                    <path d="M212.563 129.058C212.563 130.433 212.329 131.455 211.859 132.124C211.389 132.793 210.655 133.127 209.656 133.127C208.67 133.127 207.94 132.801 207.466 132.149C206.992 131.493 206.747 130.516 206.73 129.217V127.649C206.73 126.291 206.965 125.281 207.435 124.621C207.904 123.961 208.641 123.631 209.644 123.631C210.638 123.631 211.37 123.95 211.84 124.589C212.31 125.224 212.551 126.206 212.563 127.535V129.058ZM211.389 127.452C211.389 126.458 211.25 125.734 210.97 125.281C210.691 124.824 210.249 124.596 209.644 124.596C209.043 124.596 208.605 124.822 208.33 125.275C208.055 125.728 207.913 126.424 207.904 127.363V129.242C207.904 130.241 208.048 130.979 208.336 131.458C208.628 131.931 209.068 132.168 209.656 132.168C210.236 132.168 210.666 131.944 210.945 131.496C211.228 131.047 211.376 130.34 211.389 129.375V127.452ZM220.035 124.418L216.207 133H214.976L218.791 124.723H213.789V123.758H220.035V124.418ZM224.948 133.793H223.938L227.798 123.758H228.801L224.948 133.793ZM239.23 133H233.174V132.156L236.374 128.601C236.847 128.064 237.173 127.628 237.351 127.293C237.533 126.955 237.624 126.606 237.624 126.246C237.624 125.764 237.478 125.368 237.186 125.059C236.894 124.75 236.505 124.596 236.018 124.596C235.434 124.596 234.979 124.763 234.653 125.097C234.332 125.427 234.171 125.889 234.171 126.481H232.997C232.997 125.63 233.27 124.943 233.815 124.418C234.366 123.893 235.1 123.631 236.018 123.631C236.877 123.631 237.556 123.857 238.056 124.31C238.555 124.759 238.805 125.357 238.805 126.106C238.805 127.016 238.225 128.1 237.065 129.356L234.59 132.042H239.23V133ZM245.432 129.896H246.714V130.854H245.432V133H244.251V130.854H240.042V130.163L244.181 123.758H245.432V129.896ZM241.375 129.896H244.251V125.364L244.111 125.618L241.375 129.896Z" fill="white"/>
                    <path d="M46.1763 130.588H42.3042L41.4346 133H40.1777L43.707 123.758H44.7734L48.3091 133H47.0586L46.1763 130.588ZM42.6724 129.585H45.8145L44.2402 125.262L42.6724 129.585ZM50.71 133H49.5357V123.25H50.71V133ZM55.5104 133.127C54.5794 133.127 53.8219 132.822 53.2379 132.213C52.6539 131.599 52.3619 130.78 52.3619 129.756V129.541C52.3619 128.859 52.491 128.252 52.7491 127.719C53.0115 127.181 53.3754 126.762 53.8409 126.462C54.3107 126.157 54.8185 126.005 55.3644 126.005C56.2573 126.005 56.9513 126.299 57.4464 126.887C57.9415 127.475 58.1891 128.318 58.1891 129.414V129.902H53.5363C53.5532 130.579 53.75 131.127 54.1266 131.546C54.5074 131.961 54.9899 132.168 55.5738 132.168C55.9886 132.168 56.3398 132.084 56.6276 131.915C56.9153 131.745 57.1671 131.521 57.3829 131.242L58.1002 131.8C57.5247 132.685 56.6614 133.127 55.5104 133.127ZM55.3644 126.97C54.8904 126.97 54.4926 127.143 54.171 127.49C53.8494 127.833 53.6505 128.315 53.5743 128.938H57.0148V128.849C56.9809 128.252 56.8201 127.791 56.5323 127.465C56.2446 127.135 55.8553 126.97 55.3644 126.97ZM61.923 128.639L63.4465 126.132H64.8176L62.5705 129.528L64.8874 133H63.529L61.9421 130.429L60.3552 133H58.9904L61.3073 129.528L59.0602 126.132H60.4186L61.923 128.639ZM72.3299 128.88C71.2846 128.58 70.5229 128.212 70.0447 127.776C69.5708 127.336 69.3338 126.794 69.3338 126.151C69.3338 125.423 69.6237 124.822 70.2034 124.348C70.7874 123.87 71.5449 123.631 72.4759 123.631C73.1106 123.631 73.6756 123.754 74.1707 123.999C74.6701 124.244 75.0551 124.583 75.326 125.015C75.601 125.446 75.7386 125.918 75.7386 126.43H74.5135C74.5135 125.872 74.3357 125.434 73.9803 125.116C73.6248 124.795 73.1233 124.634 72.4759 124.634C71.875 124.634 71.4052 124.767 71.0667 125.034C70.7324 125.296 70.5652 125.662 70.5652 126.132C70.5652 126.508 70.7239 126.828 71.0413 127.09C71.3629 127.348 71.9067 127.585 72.6727 127.801C73.4428 128.017 74.0438 128.256 74.4754 128.519C74.9113 128.777 75.2329 129.079 75.4402 129.426C75.6518 129.773 75.7576 130.182 75.7576 130.651C75.7576 131.4 75.4656 132.001 74.8816 132.454C74.2977 132.903 73.5169 133.127 72.5394 133.127C71.9046 133.127 71.3121 133.006 70.762 132.765C70.2119 132.52 69.7866 132.185 69.4861 131.762C69.1899 131.339 69.0418 130.859 69.0418 130.321H70.2669C70.2669 130.88 70.4721 131.322 70.8826 131.648C71.2973 131.97 71.8496 132.13 72.5394 132.13C73.1826 132.13 73.6756 131.999 74.0184 131.737C74.3611 131.474 74.5325 131.117 74.5325 130.664C74.5325 130.211 74.3738 129.862 74.0564 129.617C73.7391 129.367 73.1635 129.122 72.3299 128.88ZM78.3109 126.132L78.3426 126.894C78.8462 126.301 79.5254 126.005 80.3802 126.005C81.3408 126.005 81.9947 126.373 82.3417 127.109C82.5702 126.779 82.8664 126.513 83.2303 126.31C83.5985 126.106 84.0323 126.005 84.5316 126.005C86.0381 126.005 86.8041 126.803 86.8295 128.398V133H85.6551V128.468C85.6551 127.977 85.543 127.611 85.3187 127.37C85.0944 127.124 84.7178 127.001 84.1888 127.001C83.753 127.001 83.3911 127.133 83.1034 127.395C82.8156 127.653 82.6485 128.002 82.6019 128.442V133H81.4212V128.5C81.4212 127.501 80.9325 127.001 79.9549 127.001C79.1848 127.001 78.6579 127.329 78.3744 127.985V133H77.2001V126.132H78.3109ZM89.9477 133H88.7734V126.132H89.9477V133ZM88.6781 124.31C88.6781 124.12 88.7353 123.959 88.8495 123.828C88.968 123.696 89.1415 123.631 89.37 123.631C89.5986 123.631 89.7721 123.696 89.8905 123.828C90.009 123.959 90.0683 124.12 90.0683 124.31C90.0683 124.5 90.009 124.659 89.8905 124.786C89.7721 124.913 89.5986 124.977 89.37 124.977C89.1415 124.977 88.968 124.913 88.8495 124.786C88.7353 124.659 88.6781 124.5 88.6781 124.31ZM93.4912 124.469V126.132H94.7734V127.04H93.4912V131.299C93.4912 131.574 93.5483 131.781 93.6626 131.921C93.7768 132.056 93.9715 132.124 94.2466 132.124C94.382 132.124 94.5682 132.099 94.8052 132.048V133C94.4962 133.085 94.1958 133.127 93.9038 133.127C93.379 133.127 92.9834 132.968 92.7168 132.651C92.4502 132.333 92.3169 131.883 92.3169 131.299V127.04H91.0664V126.132H92.3169V124.469H93.4912ZM97.3902 126.963C97.9107 126.324 98.5878 126.005 99.4214 126.005C100.873 126.005 101.605 126.824 101.618 128.461V133H100.443V128.455C100.439 127.96 100.325 127.594 100.101 127.357C99.8806 127.12 99.5357 127.001 99.066 127.001C98.6851 127.001 98.3508 127.103 98.063 127.306C97.7753 127.509 97.551 127.776 97.3902 128.106V133H96.2159V123.25H97.3902V126.963Z" fill="white"/>
                    <path d="M40.9434 86.7227C40.9434 86.3262 41.0687 86.0003 41.3193 85.7451C41.5745 85.4899 41.9118 85.3623 42.3311 85.3623C42.7458 85.3623 43.083 85.4876 43.3428 85.7383C43.6025 85.9844 43.7324 86.3193 43.7324 86.7432V86.9961C43.7324 87.3926 43.6071 87.7161 43.3564 87.9668C43.1058 88.2174 42.7663 88.3428 42.3379 88.3428C41.9141 88.3428 41.5745 88.2174 41.3193 87.9668C41.0687 87.7116 40.9434 87.3835 40.9434 86.9824V86.7227ZM50.2528 86.7227C50.2528 86.3262 50.3781 86.0003 50.6288 85.7451C50.884 85.4899 51.2212 85.3623 51.6405 85.3623C52.0552 85.3623 52.3925 85.4876 52.6522 85.7383C52.912 85.9844 53.0419 86.3193 53.0419 86.7432V86.9961C53.0419 87.3926 52.9165 87.7161 52.6659 87.9668C52.4152 88.2174 52.0757 88.3428 51.6473 88.3428C51.2235 88.3428 50.884 88.2174 50.6288 87.9668C50.3781 87.7116 50.2528 87.3835 50.2528 86.9824V86.7227ZM59.5623 86.7227C59.5623 86.3262 59.6876 86.0003 59.9382 85.7451C60.1935 85.4899 60.5307 85.3623 60.95 85.3623C61.3647 85.3623 61.7019 85.4876 61.9617 85.7383C62.2214 85.9844 62.3513 86.3193 62.3513 86.7432V86.9961C62.3513 87.3926 62.226 87.7161 61.9754 87.9668C61.7247 88.2174 61.3852 88.3428 60.9568 88.3428C60.533 88.3428 60.1935 88.2174 59.9382 87.9668C59.6876 87.7116 59.5623 87.3835 59.5623 86.9824V86.7227ZM68.8717 86.7227C68.8717 86.3262 68.997 86.0003 69.2477 85.7451C69.5029 85.4899 69.8401 85.3623 70.2594 85.3623C70.6741 85.3623 71.0114 85.4876 71.2711 85.7383C71.5309 85.9844 71.6608 86.3193 71.6608 86.7432V86.9961C71.6608 87.3926 71.5355 87.7161 71.2848 87.9668C71.0342 88.2174 70.6946 88.3428 70.2663 88.3428C69.8424 88.3428 69.5029 88.2174 69.2477 87.9668C68.997 87.7116 68.8717 87.3835 68.8717 86.9824V86.7227ZM98.3445 86.7227C98.3445 86.3262 98.4698 86.0003 98.7204 85.7451C98.9756 85.4899 99.3129 85.3623 99.7321 85.3623C100.147 85.3623 100.484 85.4876 100.744 85.7383C101.004 85.9844 101.134 86.3193 101.134 86.7432V86.9961C101.134 87.3926 101.008 87.7161 100.758 87.9668C100.507 88.2174 100.167 88.3428 99.739 88.3428C99.3152 88.3428 98.9756 88.2174 98.7204 87.9668C98.4698 87.7116 98.3445 87.3835 98.3445 86.9824V86.7227ZM107.654 86.7227C107.654 86.3262 107.779 86.0003 108.03 85.7451C108.285 85.4899 108.622 85.3623 109.042 85.3623C109.456 85.3623 109.794 85.4876 110.053 85.7383C110.313 85.9844 110.443 86.3193 110.443 86.7432V86.9961C110.443 87.3926 110.318 87.7161 110.067 87.9668C109.816 88.2174 109.477 88.3428 109.048 88.3428C108.625 88.3428 108.285 88.2174 108.03 87.9668C107.779 87.7116 107.654 87.3835 107.654 86.9824V86.7227ZM116.963 86.7227C116.963 86.3262 117.089 86.0003 117.339 85.7451C117.595 85.4899 117.932 85.3623 118.351 85.3623C118.766 85.3623 119.103 85.4876 119.363 85.7383C119.623 85.9844 119.752 86.3193 119.752 86.7432V86.9961C119.752 87.3926 119.627 87.7161 119.376 87.9668C119.126 88.2174 118.786 88.3428 118.358 88.3428C117.934 88.3428 117.595 88.2174 117.339 87.9668C117.089 87.7116 116.963 87.3835 116.963 86.9824V86.7227ZM126.273 86.7227C126.273 86.3262 126.398 86.0003 126.649 85.7451C126.904 85.4899 127.241 85.3623 127.661 85.3623C128.075 85.3623 128.412 85.4876 128.672 85.7383C128.932 85.9844 129.062 86.3193 129.062 86.7432V86.9961C129.062 87.3926 128.937 87.7161 128.686 87.9668C128.435 88.2174 128.096 88.3428 127.667 88.3428C127.244 88.3428 126.904 88.2174 126.649 87.9668C126.398 87.7116 126.273 87.3835 126.273 86.9824V86.7227ZM155.746 86.7227C155.746 86.3262 155.871 86.0003 156.122 85.7451C156.377 85.4899 156.714 85.3623 157.133 85.3623C157.548 85.3623 157.885 85.4876 158.145 85.7383C158.405 85.9844 158.535 86.3193 158.535 86.7432V86.9961C158.535 87.3926 158.409 87.7161 158.159 87.9668C157.908 88.2174 157.568 88.3428 157.14 88.3428C156.716 88.3428 156.377 88.2174 156.122 87.9668C155.871 87.7116 155.746 87.3835 155.746 86.9824V86.7227ZM165.055 86.7227C165.055 86.3262 165.18 86.0003 165.431 85.7451C165.686 85.4899 166.023 85.3623 166.443 85.3623C166.857 85.3623 167.195 85.4876 167.454 85.7383C167.714 85.9844 167.844 86.3193 167.844 86.7432V86.9961C167.844 87.3926 167.719 87.7161 167.468 87.9668C167.217 88.2174 166.878 88.3428 166.45 88.3428C166.026 88.3428 165.686 88.2174 165.431 87.9668C165.18 87.7116 165.055 87.3835 165.055 86.9824V86.7227ZM174.364 86.7227C174.364 86.3262 174.49 86.0003 174.74 85.7451C174.996 85.4899 175.333 85.3623 175.752 85.3623C176.167 85.3623 176.504 85.4876 176.764 85.7383C177.024 85.9844 177.154 86.3193 177.154 86.7432V86.9961C177.154 87.3926 177.028 87.7161 176.778 87.9668C176.527 88.2174 176.187 88.3428 175.759 88.3428C175.335 88.3428 174.996 88.2174 174.74 87.9668C174.49 87.7116 174.364 87.3835 174.364 86.9824V86.7227ZM183.674 86.7227C183.674 86.3262 183.799 86.0003 184.05 85.7451C184.305 85.4899 184.642 85.3623 185.062 85.3623C185.476 85.3623 185.814 85.4876 186.073 85.7383C186.333 85.9844 186.463 86.3193 186.463 86.7432V86.9961C186.463 87.3926 186.338 87.7161 186.087 87.9668C185.836 88.2174 185.497 88.3428 185.068 88.3428C184.645 88.3428 184.305 88.2174 184.05 87.9668C183.799 87.7116 183.674 87.3835 183.674 86.9824V86.7227ZM213.844 87.625C213.58 87.9395 213.263 88.1924 212.894 88.3838C212.53 88.5752 212.129 88.6709 211.691 88.6709C211.117 88.6709 210.616 88.5296 210.187 88.2471C209.763 87.9645 209.435 87.568 209.203 87.0576C208.97 86.5426 208.854 85.9753 208.854 85.3555C208.854 84.6901 208.98 84.0908 209.23 83.5576C209.485 83.0244 209.845 82.6165 210.31 82.334C210.775 82.0514 211.317 81.9102 211.937 81.9102C212.922 81.9102 213.696 82.2793 214.261 83.0176C214.831 83.7513 215.116 84.7539 215.116 86.0254V86.3945C215.116 88.3314 214.733 89.7464 213.967 90.6396C213.202 91.5283 212.047 91.984 210.502 92.0068H210.256V90.9404H210.522C211.566 90.9222 212.368 90.651 212.928 90.127C213.489 89.5983 213.794 88.7643 213.844 87.625ZM211.896 87.625C212.32 87.625 212.71 87.4951 213.065 87.2354C213.425 86.9756 213.687 86.6543 213.851 86.2715V85.7656C213.851 84.9362 213.671 84.2617 213.311 83.7422C212.951 83.2227 212.495 82.9629 211.944 82.9629C211.388 82.9629 210.941 83.1771 210.604 83.6055C210.267 84.0293 210.098 84.5898 210.098 85.2871C210.098 85.9661 210.26 86.5267 210.584 86.9688C210.912 87.4062 211.349 87.625 211.896 87.625ZM218 87.0098L218.506 82.0469H223.606V83.2158H219.579L219.278 85.9297C219.766 85.6426 220.32 85.499 220.94 85.499C221.847 85.499 222.567 85.7998 223.1 86.4014C223.633 86.9984 223.9 87.8073 223.9 88.8281C223.9 89.8535 223.622 90.6624 223.066 91.2549C222.514 91.8428 221.742 92.1367 220.748 92.1367C219.869 92.1367 219.151 91.8929 218.595 91.4053C218.039 90.9176 217.722 90.2432 217.645 89.3818H218.841C218.918 89.9515 219.121 90.3822 219.449 90.6738C219.777 90.9609 220.21 91.1045 220.748 91.1045C221.336 91.1045 221.796 90.904 222.129 90.5029C222.466 90.1019 222.635 89.5482 222.635 88.8418C222.635 88.1764 222.453 87.6432 222.088 87.2422C221.728 86.8366 221.247 86.6338 220.646 86.6338C220.094 86.6338 219.661 86.7546 219.347 86.9961L219.012 87.2695L218 87.0098ZM231.179 88.6572H232.56V89.6895H231.179V92H229.908V89.6895H225.376V88.9443L229.833 82.0469H231.179V88.6572ZM226.811 88.6572H229.908V83.7764L229.757 84.0498L226.811 88.6572ZM239.225 82.04V83.1133H238.992C238.008 83.1315 237.224 83.4232 236.641 83.9883C236.057 84.5534 235.72 85.3486 235.629 86.374C236.153 85.7725 236.869 85.4717 237.775 85.4717C238.641 85.4717 239.332 85.777 239.847 86.3877C240.366 86.9984 240.626 87.7868 240.626 88.7529C240.626 89.7783 240.346 90.5986 239.785 91.2139C239.229 91.8291 238.482 92.1367 237.543 92.1367C236.591 92.1367 235.818 91.7721 235.226 91.043C234.633 90.3092 234.337 89.3659 234.337 88.2129V87.7275C234.337 85.8955 234.727 84.4964 235.506 83.5303C236.29 82.5596 237.454 82.0628 238.999 82.04H239.225ZM237.564 86.5244C237.131 86.5244 236.732 86.6543 236.367 86.9141C236.003 87.1738 235.75 87.4997 235.608 87.8916V88.3564C235.608 89.1768 235.793 89.8376 236.162 90.3389C236.531 90.8402 236.992 91.0908 237.543 91.0908C238.113 91.0908 238.559 90.8812 238.883 90.4619C239.211 90.0426 239.375 89.4935 239.375 88.8145C239.375 88.1309 239.209 87.5794 238.876 87.1602C238.548 86.7363 238.11 86.5244 237.564 86.5244Z" fill="white"/>
                    <g clip-path="url(#clip0)">
                        <path d="M223.033 42.8269H220.036L221.911 31.2106H224.908L223.033 42.8269Z" fill="white"/>
                        <path d="M233.899 31.4946C233.307 31.2595 232.37 31 231.21 31C228.25 31 226.166 32.5817 226.153 34.8431C226.129 36.5115 227.646 37.4382 228.78 37.9945C229.94 38.563 230.334 38.934 230.334 39.4407C230.322 40.2189 229.397 40.5777 228.534 40.5777C227.337 40.5777 226.696 40.3927 225.722 39.9598L225.327 39.7742L224.908 42.3818C225.611 42.7027 226.906 42.9875 228.25 43C231.395 43 233.443 41.4428 233.467 39.0329C233.479 37.7105 232.678 36.6973 230.951 35.8693C229.903 35.3378 229.261 34.9794 229.261 34.4356C229.273 33.9412 229.804 33.4348 230.987 33.4348C231.962 33.41 232.678 33.6447 233.22 33.8796L233.491 34.003L233.899 31.4946Z" fill="white"/>
                        <path d="M237.882 38.7116C238.129 38.0443 239.079 35.4615 239.079 35.4615C239.066 35.4863 239.325 34.7818 239.473 34.3494L239.683 35.3503C239.683 35.3503 240.25 38.1309 240.374 38.7116C239.905 38.7116 238.474 38.7116 237.882 38.7116ZM241.582 31.2106H239.264C238.549 31.2106 238.005 31.4205 237.697 32.1744L233.245 42.8267H236.39C236.39 42.8267 236.908 41.393 237.019 41.0842C237.364 41.0842 240.423 41.0842 240.867 41.0842C240.953 41.492 241.225 42.8267 241.225 42.8267H244L241.582 31.2106Z" fill="white"/>
                        <path d="M217.533 31.2106L214.597 39.1318L214.277 37.5253C213.734 35.6716 212.032 33.6575 210.133 32.6561L212.821 42.8146H215.991L220.702 31.2106H217.533Z" fill="white"/>
                        <path d="M211.872 31.2106H207.049L207 31.4453C210.762 32.4093 213.253 34.7329 214.277 37.5258L213.228 32.187C213.056 31.4451 212.525 31.235 211.872 31.2106Z" fill="white"/>
                    </g>
                    <rect x="40" y="25" width="34" height="24" rx="4" fill="white" fill-opacity="0.5"/>
                    <defs>
                        <filter id="filter0_d" x="-3" y="107" width="201.5" height="98.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                            <feOffset dy="4"/>
                            <feGaussianBlur stdDeviation="20"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0.2 0 0 0 0 0.14902 0 0 0 0 0.682353 0 0 0 0.9 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                        </filter>
                        <filter id="filter1_d" x="118" y="104" width="170" height="101.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                            <feOffset dy="4"/>
                            <feGaussianBlur stdDeviation="20"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 0.752941 0 0 0 0 0.0196078 0 0 0 0.9 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                        </filter>
                        <clipPath id="clip0">
                            <rect width="37" height="12" fill="white" transform="translate(207 31)"/>
                        </clipPath>
                    </defs>
                </svg>

            </div>
            <div class="header transaction">
                <h1>Transaction</h1>
                <a href="#">+</a>
            </div>
            <div class="transactionItem">
                <div class="imgItemContainer">
                    <div class="iconContainer">
                        <i class="icofont-taxi"></i>
                    </div>
                    <div class="spendItem">
                        <span class="name">Taxi</span>
                        <span class="date">01:21 PM</span>
                    </div>
                </div>
                <span class="spendMoney">-$9,20</span>
            </div>
            <div class="transactionItem">
                <div class="imgItemContainer">
                    <div class="iconContainer">
                        <i class="icofont-shopping-cart"></i>
                    </div>
                    <div class="spendItem">
                        <span class="name">Shopping</span>
                        <span class="date">11:15 AM</span>
                    </div>
                </div>
                <span class="spendMoney">-$142,00</span>
            </div>
            <div class="transactionItem">
                <div class="imgItemContainer">
                    <div class="iconContainer">
                        <i><b>N</b></i>
                    </div>
                    <div class="spendItem">
                        <span class="name">Netflix</span>
                        <span class="date">Jan 10, 2020</span>
                    </div>
                </div>
                <span class="spendMoney">-$24,99</span>
            </div>
        </aside>
    </div>
    <div class="mainRadiusBottom"></div>
</main>
</body>
<style>
    :root {
        /* Reference colors */
        --blue-pantone: #3326ae;
        --red-ryb: #FF392Bff;
        --ghost-white: #F7F8FFff;
        --space-cadet: #2B2B4Cff;
        --amber: #FFC005ff;
        /* Custom colors*/
        --white: #fff;
        --white-transparent: #ffffff66;
        --space-cadet-transparent: #2B2B4Cbb;
        --placeholder: #cbcde4;
        --ghost-white-text: #c3c6deff;
        /* Tweet buttons */
        --video: var(--blue-pantone);
        --duration: #00c3f8;
        --likes: var(--red-ryb);
    }

    /* BODY */
    html,
    body {
        height: 100%;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 20px;
    }

    * {
        box-sizing: border-box;
    }

    a {
        cursor: pointer;
    }

    /*NAVBAR*/
    :root {
        --navbar-expanded: 12.5em;
        --navbar-shrinked: 4.4em;
        --navbar-li-padding: 1.6em;
        --navbar-li-padding-quarter: .8em;
    }

    .navbar {
        font-weight: 600;
        height: 100%;
        width: var(--navbar-shrinked);
        position: fixed;
        background-color: var(--blue-pantone);
        transition: 0.5s;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        white-space: nowrap;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
    }

    .navbar li {
        padding: var(--navbar-li-padding);
    }

    .navbar a {
        text-decoration: none;
        outline: none;
        display: flex;
        align-items: center;
        transition: 0.3s;
        color: var(--white-transparent);
    }

    .navbar i {
        font-size: 1.5rem;
    }

    .navbar a.navbar-brand {
        color: var(--white);
    }

    .navbar a.navbar-brand,
    .navbar a.navbar-footer {
        padding: var(--navbar-li-padding-quarter) var(--navbar-li-padding-quarter) var(--navbar-li-padding-quarter) var(--navbar-li-padding);
    }

    .navbar a:hover {
        color: var(--white);
    }

    .navbar span {
        margin-left: 2em;
        font-size: 1rem;
    }

    .navbar-nav span {
        vertical-align: middle;
    }

    main {
        transition: margin-left 0.5s;
        margin-left: var(--navbar-shrinked);
    }

    body.navbar-expanded .navbar {
        width: var(--navbar-expanded);
    }

    body.navbar-expanded main {
        margin-left: var(--navbar-expanded);
    }

    body.navbar-expanded li.active {
        margin-left: 7.5em;
        transition: .5s;
    }

    body.navbar-shrinked .navbar {
        width: var(--navbar-shrinked);
    }

    body.navbar-shrinked main {
        margin-left: var(--navbar-shrinked);
    }

    body.navbar-shrinked li.active {
        margin-left: 0;
        transition: .5s;
    }

    .navbar .active {
        margin-bottom: 2em;
        margin-top: -2em;
    }

    .navbar .active a {
        position: fixed;
        margin-left: 1em;
        color: var(--red-ryb);
        padding: 1em;
        background-color: var(--white);
        border-radius: 1em;
        -webkit-box-shadow: .3em .3em 2em -.3em rgba(51, 38, 174, 0.21);
        -moz-box-shadow: .3em .3em 2em -.3em rgba(51, 38, 174, 0.21);
        box-shadow: .3em .3em 2em -.3em rgba(51, 38, 174, 0.21);
    }

    .navbar .active span {
        display: none;
    }

    @media screen and (max-height: 450px) {
        .navbar {
            padding-top: 15px;
        }
        .navbar a {
            font-size: 18px;
        }
    }

    /*HEADER*/

    header {
        display: flex;
        align-items: center;
    }

    section[role="search"] {
        background-color: var(--ghost-white);
        padding: 1em 1.2em;
        border-radius: 1em;
        font-size: .75rem;
        width: 100%;
    }

    section[role="search"] input {
        border: none;
        background: none;
        margin-left: 0.5em;
        outline: none;
        font-size: 0.7rem;
        font-weight: 500;
        width: 100%;
        -webkit-appearance: none;
    }

    section[role="search"] input::placeholder {
        color: var(--placeholder);
    }

    section[role="search"] i {
        color: var(--blue-pantone);
        font-weight: bold;
    }

    .form-inline {
        display: flex;
        align-items: center;
    }

    section[role="application"] {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    nav.navbar-top a {
        text-decoration: none;
        color: var(--space-cadet);
        font-weight: 600;
        margin-left: 2em;
        font-size: 1rem;
    }

    .notification-profile {
        display: flex;
        align-items: center;
    }

    .notification-profile a {
        text-decoration: none;
        color: var(--space-cadet-transparent);
    }

    .notification-profile i {
        font-size: 1.1rem;
    }

    .notification-profile .profile-pic {
        background-image: url('../img/portrait_man.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position-y: -.5em;
        width: 1.75em;
        height: 1.75em;
        border-radius: .5em;
    }

    .notification-profile .notification {
        margin-right: 1.5em;
    }

    /*MAIN*/
    main {
        background-color: var(--white);
        border-radius: 3em 0 0 3em;
        padding: 3em;
        height: 100%;
    }

    .mainRadiusTop,
    .mainRadiusBottom {
        position: absolute;
        width: 2.5em;
        height: 2.5em;
        margin: -3em;
        background-color: var(--blue-pantone);
    }

    .mainRadiusBottom {
        margin-top: 1.4em;
    }

    .mainRadiusTop::after,
    .mainRadiusBottom::after {
        content: '';
        width: 2.5em;
        height: 2.5em;
        background-color: var(--white);
        position: absolute;
        border-top-left-radius: 2.5em;
    }

    .mainRadiusBottom::after {
        border-top-left-radius: 0;
        border-bottom-left-radius: 2.5em;
    }

    .wrapper {
        display: flex;
        margin-top: 2em;
    }

    .tabContainer {
        display: none;
        justify-content: center;
        margin-top: 1.5em;
        margin-bottom: 1.5em;
    }

    .tab {
        border-radius: .5em;
        display: flex;
        background-color: var(--white);
        -webkit-box-shadow: 0px 10px 18px 0px rgba(241, 243, 255, 1);
        -moz-box-shadow: 0px 10px 18px 0px rgba(241, 243, 255, 1);
        box-shadow: 0px 10px 18px 0px rgba(241, 243, 255, 1);
    }

    .tab a {
        text-decoration: none;
        padding: .5em 1.5rem;
        background-color: var(--white);
        border-radius: .5em;
    }

    .tab a:active {
        color: inherit;
    }

    .tab a.active {
        background-color: var(--duration);
        color: var(--white);
        border-radius: .5em;
    }

    section[role="region"] {
        height: 100%;
        width: calc(100% - 15em);
    }

    .info-box-container {
        display: flex;
    }

    .info-box {
        display: flex;
        padding: 1em 1.5em;
        -webkit-box-shadow: 0px 10px 18px 0px rgba(241, 243, 255, 1);
        -moz-box-shadow: 0px 10px 18px 0px rgba(241, 243, 255, 1);
        box-shadow: 0px 10px 18px 0px rgba(241, 243, 255, 1);
        border-radius: .75em;
        margin-right: 2em;
        width: 100%;
        cursor: pointer;
        align-items: center;
    }

    .info-box.active {
        background-color: var(--red-ryb);
        color: var(--white);
        -webkit-box-shadow: 0px 10px 18px 0px rgba(255, 57, 43, .5);
        -moz-box-shadow: 0px 10px 18px 0px rgba(255, 57, 43, .5);
        box-shadow: 0px 10px 18px 0px rgba(255, 57, 43, .5);
    }

    .info-box.active .info-content .header {
        color: var(--white-transparent);
    }

    .info-box.active svg path:first-child {
        fill: #ffffff55;
    }

    .info-box.active svg path:nth-child(2) {
        stroke: var(--white);
    }

    .info-box svg {
        width: 3em;
        height: 3em;
        border-radius: 1em;
    }

    .info-box .info-content {
        display: flex;
        flex-direction: column;
        padding-left: 1em;
    }

    .info-box .info-content .header {
        text-transform: uppercase;
        color: var(--ghost-white-text);
        font-size: .75rem;
        font-weight: normal;
        margin-bottom: 1em;
    }

    .info-box .info-content .value {
        font-weight: 600;
        font-size: 2rem;
    }


    /* STATISTICS */

    .statistics {
        margin-right: 2em;
        display: flex;
        flex-direction: column;
        margin-top: 1.5em;
        background-color: var(--ghost-white);
        border-radius: .75em;
        padding: 1.5em;
    }

    .statistics header {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        width: 100%;
        margin-bottom: 1em;
    }

    .statistics h1 {
        font-weight: 600;
    }

    .statistics select {
        box-sizing: border-box;
        -webkit-appearance: none;
        -moz-appearance: none;
        border: none;
        color: var(--blue-pantone);
        font-weight: 700;
        font-size: .8rem;
        padding: .75em 3.5em .75em 1em;
        border-radius: 1.5em;
        background-image: linear-gradient(45deg, transparent 50%, gray 50%), linear-gradient(135deg, gray 50%, transparent 50%);
        background-position: calc(100% - 20px) calc(1em + 2px), calc(100% - 15px) calc(1em + 2px), calc(100% - 2.5em) 0.5em;
        background-size: 5px 5px, 5px 5px, 1px 1.5em;
        background-repeat: no-repeat;
    }

    #statisticsChart {
        height: 10em;
    }


    /* SPENT TIME */

    .bottomBox {
        margin-right: 2em;
        display: flex;
        flex-direction: row;
        margin-top: 1.5em;
        border-radius: .75em;
    }

    .bottomBox header {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        width: 100%;
    }

    .bottomBox h1 {
        font-weight: 600;
    }

    .bottomBox .spentTime,
    .bottomBox .tweet {
        padding: 1em 1.5em;
        -webkit-box-shadow: 0px 7px 17px 3px rgba(243, 243, 255, 1);
        -moz-box-shadow: 0px 7px 17px 3px rgba(243, 243, 255, 1);
        box-shadow: 0px 7px 17px 3px rgba(243, 243, 255, 1);
        border-radius: .75em;
    }

    .bottomBox .spentTime {
        width: 100%;
        padding: 0;
    }

    .spentTime h1 {
        margin: 1em 1.5em;
    }

    .tweet {
        margin-left: 1.5em;
    }

    .tweet .profileContainer {
        display: flex;
        align-items: center;
    }

    .tweet .profileInfo {
        display: flex;
        flex-direction: column;
        margin-left: .75em;
    }

    .tweet .profileImage {
        background-image: url('../img/tweet-image.jpeg');
        background-repeat: no-repeat;
        background-size: cover;
        width: 2em;
        height: 2em;
        border-radius: 2em;
    }

    .tweet .profileInfo .name {
        font-size: 1rem;
        font-weight: bold;
    }

    .tweet .profileInfo .title {
        margin-top: .5em;
        font-size: .75rem;
        color: var(--ghost-white-text);
    }

    .tweet h1 {
        margin-top: .75em;
        line-height: 1.5em;
    }

    .tweet .badgesContainer {
        display: flex;
        margin-top: 1em;
        font-size: 1rem;
    }

    .tweetBadge i {
        margin-right: .25em;
    }

    .tweetBadge:nth-child(1) i {
        color: var(--video);
    }

    .tweetBadge:nth-child(2) i {
        color: var(--duration);
    }

    .tweetBadge:nth-child(3) i {
        color: var(--likes);
    }

    .tweetBadge {
        margin-right: .5em;
    }

    .tweetBottomContainer {
        margin-top: 1.5em;
        font-size: 1rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .tweetBottomContainer .time {}

    .tweetBottomContainer a {
        text-decoration: none;
        color: white;
        background-color: var(--blue-pantone);
        padding: 1em 1.5em;
        border-radius: 2em;
    }

    .tweetBottomContainer a i {
        margin-left: 1em;
    }

    .chartContainer {
        height: 8em;
    }

    @media screen and (max-width: 1300px) {
        /* (1300px) */
        .info-box .info-content .value {
            font-weight: 600;
            font-size: 1.5rem;
        }
        .info-box {
            /* padding: .5em .75em; */
            border-radius: .375em;
            margin-right: 1em;
        }
        .info-box svg {
            width: 1.5em;
            height: 1.5em;
        }
        .info-box .info-content .header {
            margin-bottom: 0;
        }
        .statistics {
            margin-right: 1em;
            margin-top: 1em;
        }
        .bottomBox {
            margin-right: 1em;
            margin-top: 1em;
        }
        .tweet {
            margin-left: 0.75em;
            font-size: 1rem;
        }
        .tweetBadge {
            font-size: .75rem;
        }
        .tweetBottomContainer {
            margin-top: 1.5em;
        }
        .tweetBottomContainer .time {
            font-size: .75rem;
        }
        .tweetBottomContainer a {
            font-size: .75rem;
        }
    }

    @media screen and (max-width: 1100px) {
        /* 1100px */
        .info-box .info-content .header {
            font-size: .5rem;
        }
        .info-box .info-content .value {
            font-size: 1rem;
        }
        .info-box {
            padding: .5em .75em;
        }
        .info-box .info-content {
            padding-left: .75em;
        }
    }

    @media screen and (max-width: 920px) {
        /* Tablet (920px) */
        .wrapper {
            margin-top: .5em;
        }
        section[role="search"] {
            width: auto;
        }
        .wrapper aside {
            width: 100%;
            margin-bottom: 4em;
        }
        .cardContainer {
            display: flex;
            justify-content: center;
        }
        .cardContainer svg {
            width: 20em;
        }
        .tabContainer {
            display: flex;
        }
        .mainRadiusTop,
        .mainRadiusBottom {
            display: none;
        }
        .navbar-brand,
        .navbar-footer {
            display: none !important;
        }
        .navbar {
            bottom: 0;
            width: 100%;
            padding: 0.1em;
            position: fixed;
            margin: 0;
            flex-direction: row;
            height: 2.75em;
        }
        .navbar-nav {
            display: flex;
            justify-content: space-between;
            width: 100%;
            padding: 0em 1em;
            align-items: center;
        }
        .navbar li {
            padding: .75em;
        }
        main {
            margin-left: 0;
            border-radius: 0;
        }
        aside {
            display: none;
        }
        section[role="region"] {
            width: 100%;
        }
        .navbar .active {
            width: 5em;
        }
        .navbar .active a {
            margin-left: 0;
        }
        nav.navbar-top {
            margin-left: .5em;
        }
        nav.navbar-top a {
            margin-left: .5em;
        }
    }

    @media screen and (max-width: 768px) {
        /* Tablet (768px) */
    }

    @media screen and (max-width: 530px) {
        /* Phone (Large)*/
        nav.navbar-top {
            display: none;
        }
        section[role="application"] {
            justify-content: flex-end;
        }
        .wrapper {
            margin-top: 0;
        }
        .tabContainer {
            margin-top: .75em;
            margin-bottom: .75em;
        }
        .navbar li {
            padding: .3em;
        }
        .navbar .active {
            width: 3em;
        }
        .navbar a {
            flex-direction: column;
        }
        .navbar span {
            margin-left: 0;
            /* font-size: .75rem; */
        }
        .navbar i {
            font-size: 1rem;
        }
        main {
            padding: 0;
        }
        main header {
            margin-top: 1em;
        }
        main header,
        main .info-box-container {
            padding: 0 1em 1em 1em;
        }
        .info-box {
            margin-bottom: .5em;
            -webkit-box-shadow: 0px 5px 9px 0px rgba(241, 243, 255, 1);
            -moz-box-shadow: 0px 5px 9px 0px rgba(241, 243, 255, 1);
            box-shadow: 0px 5px 9px 0px rgba(241, 243, 255, 1);
        }
        .info-box.active {
            -webkit-box-shadow: 0px 5px 9px 0px rgba(255, 57, 43, .5);
            -moz-box-shadow: 0px 5px 9px 0px rgba(255, 57, 43, .5);
            box-shadow: 0px 5px 9px 0px rgba(255, 57, 43, .5);
        }
        .info-box-container {
            flex-direction: column;
        }
        .statistics,
        .bottomBox {
            margin-right: 0;
            margin-top: 0;
            padding: 0 .75em .75em .75em;
            flex-direction: column;
        }
        .bottomBox {
            padding: 0;
        }
        .bottomBox .spentTime {
            width: 100%;
            padding-bottom: 1em;
        }
        .spentTime {
            padding: .75em !important;
        }
        .spentTime h1 {
            margin: 0;
        }
        .bottomBox header,
        .statistics header {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            width: 100%;
            padding: 0;
        }
        .tweet {
            margin-left: 0;
            padding: .75em !important;
            margin-bottom: 5em;
            font-size: inherit;
        }
        aside {
            border-radius: 0 !important;
        }
        aside .chartContainer span {
            float: initial !important;
            top: initial !important;
            margin-right: initial !important;
        }
    }

    @media screen and (max-width: 320px) {
        /* Phone (Small) */
        .navbar li {
            padding: 0;
        }
        .navbar span {
            /* margin-left: 0; */
            font-size: .75rem;
        }
        .navbar {
            height: 2em;
        }
    }

    /*ASIDE*/
    aside {
        background-color: var(--ghost-white);
        height: 100%;
        width: 15em;
        padding: 1em;
        border-radius: 1em;
    }

    .editContainer {
        display: flex;
        width: 100%;
        justify-content: flex-end;
    }

    .editContainer i {
        color: var(--ghost-white-text);
    }

    aside .chartContainer {
        margin-top: 0em;
    }

    aside .chartContainer span {
        background-color: var(--blue-pantone);
        color: var(--white);
        height: fit-content;
        font-size: .75rem;
        padding: 1.25em 1.7em;
        position: relative;
        float: right;
        top: 4em;
        margin-right: -4em;
        border-radius: .5em;
        -webkit-box-shadow: 0px 5px 9px 0px rgba(51, 38, 174, .3);
        -moz-box-shadow: 0px 5px 9px 0px rgba(51, 38, 174, .3);
        box-shadow: 0px 5px 9px 0px rgba(51, 38, 174, .3);
    }

    #asideChart {
        /* background-color: var(--white); */
    }

    .cardContainer {
        margin-top: 1.5em;
    }

    aside .header {
        display: flex;
        justify-content: space-between;
        margin-top: 3em;
        align-items: center;
        font-weight: 600;
    }

    aside .header.transaction a {
        font-size: 1rem;
        padding: .4em .5em;
        border-radius: .5em;
        color: var(--white);
        background-color: var(--red-ryb);
        text-decoration: none;
    }

    aside .header.transaction {
        margin-bottom: 1em;
        margin-top: 0;
    }

    .transactionItem {
        display: flex;
        align-items: center;
        font-size: .9rem;
        justify-content: space-between;
        margin-bottom: 2em;
    }

    .transactionItem .imgItemContainer {
        display: flex;
    }

    .transactionItem i {
        color: var(--red-ryb);
    }

    .transactionItem .iconContainer {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: .7em;
        background-color: var(--white);
        border-radius: .5em;
        margin-right: 1em;
    }

    .transactionItem .spendItem {
        display: flex;
        flex-direction: column;
    }

    .transactionItem .spendItem .date {
        color: var(--ghost-white-text);
        margin-top: .5em;
    }

    .transactionItem .spendItem .name {
        font-weight: 600;
    }

    .transactionItem .spendMoney {
        font-weight: 600;
    }
</style>
<script>
    /*NAVBAR*/

    var mini = true;
    document.getElementById('expander').addEventListener('click', toggleSidebar);
    document.getElementsByClassName('navbar-nav')[0].addEventListener('click', changeTab);

    function toggleSidebar() {
        if (mini) {
            console.log("opening sidebar");
            document.getElementsByTagName("body")[0].className = 'navbar-expanded';
            mini = false;
        } else {
            console.log("closing sidebar");
            document.getElementsByTagName("body")[0].className = 'navbar-shrinked';
            mini = true;
        }
    }

    function changeTab() {
        let target = arguments[0].target;
        let tagName = target.tagName;
        let liElement;
        if (tagName === "I" || tagName === "SPAN") {
            liElement = target.parentElement.parentElement;
        } else if (tagName === "A") {
            liElement = target.parentElement;
        } else {
            return;
        }
        [...liElement.parentElement.children].forEach(x => x.className = "");
        liElement.classList.add('active');
    }

    /*TABBAR*/
    document.getElementsByClassName('tab')[0].addEventListener('click', changeTab);
    var activeTab = 'tabCharts';

    function changeTab() {
        let target = arguments[0].target;
        let tagName = target.tagName;
        let liElement;
        if (tagName === "I" || tagName === "SPAN") {
            liElement = target.parentElement;
        } else if (tagName === "A") {
            liElement = target;
        } else {
            return;
        }

        [...liElement.parentElement.children].forEach(x => x.className = "");
        liElement.classList.add('active');

        let charts = document.querySelector('section[role="region"]');
        let aside = document.querySelector('aside');
        activeTab = liElement.id;
        if (activeTab === 'tabCreditCard') {
            charts.style.display = 'none';
            aside.style.display = 'initial';
        } else {
            aside.style.display = 'none';
            charts.style.display = 'initial';
        }
    }

    /*INFOBOX*/
    document.getElementsByClassName('info-box-container')[0].addEventListener('click', changeActive);

    function changeActive() {
        let target = arguments[0].target;
        let className = target.className;
        let tagName = target.tagName;
        let infobox;
        if (tagName === "svg") {
            infobox = target.parentElement;
        } else if (tagName === "path") {
            infobox = target.parentElement.parentElement;
        } else if (className === "info-box-container") {
            return;
        } else if (className.includes("info-box")) {
            infobox = target;
        } else if (className === "value" || className === "header") {
            infobox = target.parentElement.parentElement;
        } else if (className === "info-content") {
            infobox = target.parentElement;
        } else {
            return;
        }
        [...infobox.parentElement.children].forEach(x => x.className = "info-box");
        infobox.classList.add('info-box');
        infobox.classList.add('active');
    }

    /* STATISTICS */
    var data = {
        labels: ["Nov", "Dec", "Jan", "Feb", "Mar", "Apr", "May", "Jun"],
        datasets: [{
            label: 'A',
            backgroundColor: "rgb(51, 38, 174)",
            data: [500, 300, 800, 150, 200, 150, 800, 200, 800, 100],
        },
            {
                label: 'B',
                backgroundColor: "rgb(51, 38, 174)",
                data: [300, 400, 150, 200, 100, 500, 400, 350, 700, 200],
            },
            {
                label: 'C',
                backgroundColor: "rgb(51, 38, 174)",
                data: [450, 700, 300, 650, 150, 300, 600, 450, 835, 75],
            },
        ]
    };

    var options = {
        cornerRadius: 0,
        maintainAspectRatio: false,
        legend: {
            display: false,
            position: 'bottom',
            labels: {
                fontColor: "rgba(0,0,0, 0.5)",
            }
        },
        scales: {
            yAxes: [{
                gridLines: {
                    display: false,
                },
                ticks: {
                    maxTicksLimit: 5,
                }
            }],
            xAxes: [{
                barPercentage: 0.25,
                gridLines: {
                    display: false,
                },
            }]
        }
    };


    var ctx = document.getElementById('statisticsChart').getContext('2d');
    var myLineChart = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: options
    });

    /*SPENT TIME*/
    var gradientFill = ctx.createLinearGradient(0, 0, 0, 125);
    gradientFill.addColorStop(0, "rgba(244,246,255, 1)");
    gradientFill.addColorStop(1, "rgba(255,255,255, 1)");


    var data = {
        labels: ["", "Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat", ""],
        datasets: [{
            backgroundColor: "rgba(0,0,0,0)",
            borderColor: "rgba(255,57,43, 1)",
            borderWidth: 2,
            data: [5, 3, 8, 6, 10, 8, 13],
        },
            {
                backgroundColor: "rgba(0,0,0,0)",
                borderColor: "#f0f2fa",
                borderWidth: 1,
                fill: true,
                backgroundColor: gradientFill,
                data: [3, 5, 4, 10, 8, 9, 3, 15, 14, 17],
            }
        ]
    };

    var options = {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            display: false
        },
        tooltips: {
            mode: 'index',
            intersect: true,
            yPadding: 10,
            xPadding: 10,
            caretSize: 8,
            backgroundColor: 'rgba(255,57,43, 1)',
            titleFontColor: "#fff",
            bodyFontStyle: 'bold',
            bodyFontColor: "#fff",
            displayColors: false,
            callbacks: {
                label: function(tooltipItems, data) {
                    return "4h 26 min";
                }
            }
        },
        showAllTooltips: true,

        // annotation: {
        //     events: ["click"],
        //     annotations: [{
        //             drawTime: "afterDatasetsDraw",
        //             id: "hline",
        //             type: "line",
        //             mode: "horizontal",
        //             scaleID: "y-axis-0",
        //             value: 13,
        //             borderColor: "#000",
        //             borderWidth: 1,
        //             label: {
        //                 backgroundColor: "red",
        //                 content: "Test Label",
        //                 enabled: true,
        //                 position: "center",
        //                 xAdjust: 100,
        //             },
        //             onClick: function(e) {
        //                 // The annotation is is bound to the `this` variable
        //                 console.log("Annotation", e.type, this);
        //             }
        //         }
        //         //     {
        //         //     drawTime: "beforeDatasetsDraw",
        //         //     type: "box",
        //         //     xScaleID: "x-axis-0",
        //         //     yScaleID: "y-axis-0",
        //         //     xMin: "Thu",
        //         //     xMax: "Sat",
        //         //     yMin: 13,
        //         //     yMax: 15,
        //         //     backgroundColor: "rgba(101, 33, 171, 0.5)",
        //         //     borderColor: "rgb(101, 33, 171)",
        //         //     borderWidth: 1,
        //         //     onClick: function(e) {
        //         //         console.log("Box", e.type, this);
        //         //     }
        //         // }
        //     ]
        // },
        scales: {
            yAxes: [{
                display: false,
                ticks: {
                    maxTicksLimit: 5,
                    min: 0,
                },
                gridLines: {
                    display: false
                }
            }],
            xAxes: [{
                display: true,
                ticks: {
                    fontSize: 12,
                    fontColor: '#c3c6de'
                },
                gridLines: {
                    display: false
                }
            }]
        },
        elements: {
            point: {
                radius: 0
            }
        }
    };


    Chart.pluginService.register({
        beforeRender: function(chart) {
            if (chart.config.options.showAllTooltips) {
                // create an array of tooltips
                // we can't use the chart tooltip because there is only one tooltip per chart
                chart.pluginTooltips = [];
                chart.config.data.datasets.forEach(function(dataset, i) {
                    chart.getDatasetMeta(i).data.forEach(function(sector, j) {
                        chart.pluginTooltips.push(new Chart.Tooltip({
                            _chart: chart.chart,
                            _chartInstance: chart,
                            _data: chart.data,
                            _options: chart.options.tooltips,
                            _active: [sector]
                        }, chart));
                    });
                });

                // turn off normal tooltips
                chart.options.tooltips.enabled = false;
            }
        },
        afterDraw: function(chart, easing) {
            if (chart.config.options.showAllTooltips) {
                // we don't want the permanent tooltips to animate, so don't do anything till the animation runs atleast once
                if (!chart.allTooltipsOnce) {
                    if (easing !== 1)
                        return;
                    chart.allTooltipsOnce = true;
                }

                // turn on tooltips
                chart.options.tooltips.enabled = true;
                Chart.helpers.each(chart.pluginTooltips, function(tooltip, i) {
                    if (i !== 6) return;
                    tooltip.initialize();
                    tooltip.update();
                    // we don't actually need this since we are not animating tooltips
                    tooltip.pivot();
                    tooltip.transition(easing).draw();
                });
                chart.options.tooltips.enabled = false;
            }
        }
    });

    var ctx = document.getElementById('spentTimeChart').getContext('2d');
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: data,
        options: options
    });

    /*ASIDE CHART*/
    var data = {
        labels: ["Spend", "Earned"],
        datasets: [{
            label: "Population (millions)",
            backgroundColor: ["#3326ae", "#dad7e9"],
            data: [62, 38]
        }]
    };

    var options = {
        maintainAspectRatio: false,
        cutoutPercentage: 90,
        backgroundColor: '#fff',
        elements: {
            center: {
                text: '38%',
                color: '#3326ae', // Default is #000000
                fontStyle: 'Arial', // Default is Arial
                fontSize: 12,
                sidePadding: 60, // Default is 20 (as a percentage)
                minFontSize: 20, // Default is 20 (in px), set to false and text will not wrap.
                lineHeight: 25 // Default is 25 (in px), used for when text wraps
            }
        },
        legend: {
            display: false,
            position: 'bottom',
            labels: {
                fontColor: "rgba(0,0,0, 0.5)",
                boxWidth: 20,
                padding: 10
            }
        },
    };

    Chart.pluginService.register({
        beforeDraw: function(chart) {
            if (chart.config.options.elements.center) {
                // Get ctx from string
                var ctx = chart.chart.ctx;

                // Get options from the center object in options
                var centerConfig = chart.config.options.elements.center;
                var fontStyle = centerConfig.fontStyle || 'Arial';
                var txt = centerConfig.text;
                var color = centerConfig.color || '#000';
                var maxFontSize = centerConfig.maxFontSize || 75;
                var sidePadding = centerConfig.sidePadding || 20;
                var sidePaddingCalculated = (sidePadding / 100) * (chart.innerRadius * 2)
                // Start with a base font of 30px
                ctx.font = "30px " + fontStyle;

                // Get the width of the string and also the width of the element minus 10 to give it 5px side padding
                var stringWidth = ctx.measureText(txt).width;
                var elementWidth = (chart.innerRadius * 2) - sidePaddingCalculated;

                // Find out how much the font can grow in width.
                var widthRatio = elementWidth / stringWidth;
                var newFontSize = Math.floor(30 * widthRatio);
                var elementHeight = (chart.innerRadius * 2);

                // Pick a new font size so it will not be larger than the height of label.
                var fontSizeToUse = Math.min(newFontSize, elementHeight, maxFontSize);
                var minFontSize = centerConfig.minFontSize;
                var lineHeight = centerConfig.lineHeight || 25;
                var wrapText = false;

                if (minFontSize === undefined) {
                    minFontSize = 20;
                }

                if (minFontSize && fontSizeToUse < minFontSize) {
                    fontSizeToUse = minFontSize;
                    wrapText = true;
                }

                // Set font settings to draw it correctly.
                ctx.textAlign = 'center';
                ctx.textBaseline = 'middle';
                var centerX = ((chart.chartArea.left + chart.chartArea.right) / 2);
                var centerY = ((chart.chartArea.top + chart.chartArea.bottom) / 2);
                ctx.font = fontSizeToUse + "px " + fontStyle;
                ctx.fillStyle = color;

                if (!wrapText) {
                    ctx.fillText(txt, centerX, centerY);
                    return;
                }

                var lines = [];
                var chunks = txt.split('\n');
                for (var m = 0; m < chunks.length; m++) {
                    var words = chunks[m].split(' ');
                    var line;

                    // Break words up into multiple lines if necessary
                    for (var n = 0; n < words.length; n++) {
                        var testLine = (n == 0) ? words[n] : line + ' ' + words[n];
                        var metrics = ctx.measureText(testLine);
                        var testWidth = metrics.width;
                        if (testWidth > elementWidth && n > 0) {
                            lines.push(line);
                            line = words[n];
                        } else {
                            line = testLine;
                        }
                    }
                    lines.push(line);
                }

                // Move the center up depending on line height and number of lines
                centerY -= ((lines.length - 1) / 2) * lineHeight;

                // All but last line
                for (var n = 0; n < lines.length; n++) {
                    ctx.fillText(lines[n], centerX, centerY);
                    centerY += lineHeight;
                }
            }
        }
    });

    var ctx = document.getElementById('asideChart').getContext('2d');
    var myLineChart = new Chart(ctx, {
        type: 'doughnut',
        data: data,
        options: options
    });
</script>