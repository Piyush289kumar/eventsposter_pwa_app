<div class="nav">
    {{-- <a href="{{route('home')}}" class="nav-item active"> --}}
    <a href="{{ route('home') }}" class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
        <svg class="material-icons home-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none">
            <path
                d="M9.02 2.84001L3.63 7.04001C2.73 7.74001 2 9.23001 2 10.36V17.77C2 20.09 3.89 21.99 6.21 21.99H17.79C20.11 21.99 22 20.09 22 17.78V10.5C22 9.29001 21.19 7.74001 20.2 7.05001L14.02 2.72001C12.62 1.74001 10.37 1.79001 9.02 2.84001Z"
                stroke="#6218FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path opacity="0.34" d="M12 17.99V14.99" stroke="#6218FF" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
        </svg>
        <span class="nav-text">Home</span>
    </a>
    {{-- <a href="aiVoices.html" class="nav-item">
                <svg class="material-icons search-icon" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none">
                    <path
                        d="M6.28016 21.9998C8.00328 21.9998 9.40016 20.6029 9.40016 18.8798C9.40016 17.1566 8.00328 15.7598 6.28016 15.7598C4.55703 15.7598 3.16016 17.1566 3.16016 18.8798C3.16016 20.6029 4.55703 21.9998 6.28016 21.9998Z"
                        stroke="#0F0F0F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M17.7196 19.9197C19.4427 19.9197 20.8396 18.5228 20.8396 16.7997C20.8396 15.0766 19.4427 13.6797 17.7196 13.6797C15.9965 13.6797 14.5996 15.0766 14.5996 16.7997C14.5996 18.5228 15.9965 19.9197 17.7196 19.9197Z"
                        stroke="#0F0F0F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <g opacity="0.4">
                        <path
                            d="M20.8404 16.8003V4.60034C20.8404 2.00034 19.2104 1.64034 17.5604 2.09034L11.3204 3.79034C10.1804 4.10034 9.40039 5.00034 9.40039 6.30034V8.47034V9.93034V18.8703"
                            stroke="#0F0F0F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M9.40039 9.52039L20.8404 6.40039" stroke="#0F0F0F" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
                <span class="nav-text">AI Voices</span>
            </a> --}}
    <a href="{{ route('posters') }}" class="nav-item {{ request()->routeIs('posters') ? 'active' : '' }}">
        <svg class="material-icons person-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none">
            <path
                d="M21.6698 14.3L21.2698 19.3C21.1198 20.83 20.9998 22 18.2898 22H5.70977C2.99977 22 2.87977 20.83 2.72977 19.3L2.32977 14.3C2.24977 13.47 2.50977 12.7 2.97977 12.11C2.98977 12.1 2.98977 12.1 2.99977 12.09C3.54977 11.42 4.37977 11 5.30977 11H18.6898C19.6198 11 20.4398 11.42 20.9798 12.07C20.9898 12.08 20.9998 12.09 20.9998 12.1C21.4898 12.69 21.7598 13.46 21.6698 14.3Z"
                stroke="#0F0F0F" stroke-width="2" stroke-miterlimit="10" />
            <path opacity="0.4"
                d="M3.5 11.4303V6.28027C3.5 2.88027 4.35 2.03027 7.75 2.03027H9.02C10.29 2.03027 10.58 2.41027 11.06 3.05027L12.33 4.75027C12.65 5.17027 12.84 5.43027 13.69 5.43027H16.24C19.64 5.43027 20.49 6.28027 20.49 9.68027V11.4703"
                stroke="#0F0F0F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                stroke-linejoin="round" />
            <path opacity="0.4" d="M9.42969 17H14.5697" stroke="#0F0F0F" stroke-width="2" stroke-miterlimit="10"
                stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <span class="nav-text">Posters</span>
    </a>
    <a href="{{ route('account') }}" class="nav-item {{ request()->routeIs('account') ? 'active' : '' }}">
        <svg class="material-icons person-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none">
            <path opacity="0.4"
                d="M18.1404 21.6198C17.2604 21.8798 16.2204 21.9998 15.0004 21.9998H9.00035C7.78035 21.9998 6.74035 21.8798 5.86035 21.6198C6.08035 19.0198 8.75035 16.9697 12.0004 16.9697C15.2504 16.9697 17.9204 19.0198 18.1404 21.6198Z"
                stroke="#0F0F0F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path
                d="M22 9V15C22 18.78 20.86 20.85 18.14 21.62C17.26 21.88 16.22 22 15 22H9C7.78 22 6.74 21.88 5.86 21.62C3.14 20.85 2 18.78 2 15V9C2 4 4 2 9 2H15C20 2 22 4 22 9Z"
                stroke="#0F0F0F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path opacity="0.4"
                d="M15.5799 10.58C15.5799 12.56 13.9799 14.17 11.9999 14.17C10.0199 14.17 8.41992 12.56 8.41992 10.58C8.41992 8.60002 10.0199 7 11.9999 7C13.9799 7 15.5799 8.60002 15.5799 10.58Z"
                stroke="#0F0F0F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <span class="nav-text">Account</span>
    </a>
</div>
