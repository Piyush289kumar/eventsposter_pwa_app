<div class="nav">
    <a href="{{ route('home') }}" class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
        <div class="icon-wrapper">
            <svg xmlns="http://www.w3.org/2000/svg" class="material-icons" width="24" height="24" viewBox="0 0 24 24"
                fill="none">
                <path
                    d="M9.02 2.84L3.63 7.04C2.73 7.74 2 9.23 2 10.36V17.77C2 20.09 3.89 21.99 6.21 21.99H17.79C20.11 21.99 22 20.09 22 17.78V10.5C22 9.29 21.19 7.74 20.2 7.05L14.02 2.72C12.62 1.74 10.37 1.79 9.02 2.84Z"
                    stroke="#6218FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path opacity="0.34" d="M12 17.99V14.99" stroke="#6218FF" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </div>
        <span class="nav-text">Home</span>
    </a>
    <a href="{{ route('posters') }}" class="nav-item {{ request()->routeIs('posters') ? 'active' : '' }}">
        <div class="icon-wrapper">
            <svg xmlns="http://www.w3.org/2000/svg" class="material-icons" width="24" height="24"
                viewBox="0 0 24 24" fill="none">
                <path
                    d="M21.67 14.3L21.27 19.3C21.12 20.83 21 22 18.29 22H5.71C2.99977 22 2.88 20.83 2.73 19.3L2.33 14.3C2.25 13.47 2.51 12.7 2.98 12.11C3.55 11.42 4.38 11 5.31 11H18.69C19.62 11 20.44 11.42 20.98 12.07C21.49 12.69 21.76 13.46 21.67 14.3Z"
                    stroke="#0F0F0F" stroke-width="2" stroke-miterlimit="10" />
                <path opacity="0.4"
                    d="M3.5 11.43V6.28C3.5 2.88 4.35 2.03 7.75 2.03H9.02C10.29 2.03 10.58 2.41 11.06 3.05L12.33 4.75C12.65 5.17 12.84 5.43 13.69 5.43H16.24C19.64 5.43 20.49 6.28 20.49 9.68V11.47"
                    stroke="#0F0F0F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path opacity="0.4" d="M9.43 17H14.57" stroke="#0F0F0F" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </div>
        <span class="nav-text">Posters</span>
    </a>
    <a href="{{ route('profile.frames.show') }}"
        class="nav-item {{ request()->routeIs('profile.frames.show') ? 'active' : '' }}">
        <div class="icon-wrapper">
            <!-- Custom SVG from SVGRepo -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32" fill="none">
                <style type="text/css">
                    .blueprint_een {
                        fill: currentColor;
                    }
                </style>
                <path class="blueprint_een" d="M7,28h18V4H7V28z M8,5h16v22H8V5z M29,4.773V4.64C29,2.082,26.918,0,24.36,0
            c-0.307,0-0.614,0.03-0.91,0.09l-4.386,0.877l-1.597-0.532c-0.946-0.315-1.989-0.315-2.934,0l-1.598,0.532L8.551,0.09
            C8.252,0.03,7.946,0,7.64,0C5.082,0,3,2.082,3,4.64v0.134c0,0.193,0.012,0.386,0.036,0.576l0.943,7.549l-0.544,1.634
            c-0.315,0.946-0.315,1.988,0,2.934l0.544,1.634l-0.943,7.548C3.012,26.841,3,27.034,3,27.227v0.134C3,29.918,5.082,32,7.64,32
            c0.307,0,0.614-0.03,0.91-0.09l4.386-0.877l1.597,0.532c0.946,0.315,1.989,0.315,2.934,0l1.598-0.532l4.385,0.877
            C23.748,31.97,24.054,32,24.36,32c2.558,0,4.64-2.082,4.64-4.64v-0.134c0-0.193-0.012-0.386-0.036-0.576l-0.943-7.549l0.545-1.635
            c0.315-0.946,0.314-1.988,0-2.933l-0.544-1.634l0.943-7.548C28.988,5.159,29,4.966,29,4.773z M27,4.773
            c0,0.109-0.007,0.218-0.021,0.328l-1,8l0.688,2.064c0.179,0.538,0.18,1.131,0,1.669l-0.688,2.065l1,8.001
            C26.993,27.009,27,27.117,27,27.227v0.134c0,1.456-1.184,2.64-2.64,2.64c-0.174,0-0.348-0.017-0.518-0.051l-4.906-0.981l-2.102,0.7
            c-0.538,0.18-1.13,0.18-1.669,0l-2.101-0.7l-4.909,0.981C7.988,29.983,7.814,30,7.64,30C6.184,30,5,28.816,5,27.36v-0.134
            c0-0.109,0.007-0.218,0.021-0.328l1-8l-0.688-2.064c-0.18-0.538-0.18-1.131,0-1.669l0.688-2.064l-1-8.001
            C5.007,4.991,5,4.883,5,4.773V4.64C5,3.184,6.184,2,7.64,2c0.174,0,0.348,0.017,0.518,0.051l4.906,0.981l2.102-0.7
            c0.538-0.18,1.13-0.18,1.669,0l2.101,0.7l4.909-0.981C24.012,2.017,24.186,2,24.36,2C25.816,2,27,3.184,27,4.64V4.773z M9,26h14V6H9
            V26z M10,7h12v18H10V7z" />
            </svg>
        </div>
        <span class="nav-text">Frames</span>
    </a>
    <a href="{{ route('account') }}" class="nav-item {{ request()->routeIs('account') ? 'active' : '' }}">
        <div class="icon-wrapper">
            <svg xmlns="http://www.w3.org/2000/svg" class="material-icons" width="24" height="24"
                viewBox="0 0 24 24" fill="none">
                <path opacity="0.4"
                    d="M18.14 21.62C17.26 21.88 16.22 22 15 22H9C7.78 22 6.74 21.88 5.86 21.62C6.08 19.02 8.75 16.97 12 16.97C15.25 16.97 17.92 19.02 18.14 21.62Z"
                    stroke="#0F0F0F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M22 9V15C22 18.78 20.86 20.85 18.14 21.62C17.26 21.88 16.22 22 15 22H9C7.78 22 6.74 21.88 5.86 21.62C3.14 20.85 2 18.78 2 15V9C2 4 4 2 9 2H15C20 2 22 4 22 9Z"
                    stroke="#0F0F0F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path opacity="0.4"
                    d="M15.58 10.58C15.58 12.56 13.98 14.17 12 14.17C10.02 14.17 8.42 12.56 8.42 10.58C8.42 8.6 10.02 7 12 7C13.98 7 15.58 8.6 15.58 10.58Z"
                    stroke="#0F0F0F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>
        <span class="nav-text">Account</span>
    </a>
</div>
<style>
    body {
        padding-bottom: 1px;
    }

    .nav {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        height: 75px;
        background-color: #fff;
        border-top: 1px solid #ccc;
        display: flex;
        justify-content: space-around;
        align-items: center;
        box-shadow: 0 -1px 5px rgba(0, 0, 0, 0.05);
        z-index: 9999999;
        padding: 10px;
        padding-top: 2px;
    }

    .nav-item {
        flex: 1;
        text-align: center;
        color: #888;
        font-size: 12px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        position: relative;
    }

    .nav-item .icon-wrapper {
        height: 34px;
        width: 34px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    .nav-item.active .icon-wrapper {
        background-color: rgba(98, 24, 255, 0.1);
    }

    .nav-item svg {
        height: 24px;
        width: 24px;
        margin-bottom: 2px;
    }

    .nav-item.active {
        color: #6218FF;
    }

    .nav-item.active svg path {
        stroke: #6218FF;
    }

    .nav-item.active {
        flex-grow: 1;
        border-radius: 20px;
        background: transparent;
        justify-content: flex-start;
    }

    .nav-text {
        font-size: 11px;
        line-height: 1;
        margin-top: 2px;
        display: block;
        color: #000;
    }
</style>
