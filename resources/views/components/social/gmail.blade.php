@props(['url'])
<button onclick="window.open('{{ $url }}', '_blank')" class="w-12 h-12 flex items-center justify-center bg-gray-100 cursor-pointer rounded-md shadow-md shadow-transparent transition-all duration-300 hover:shadow-blue-200" >
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 54 41" fill="none">
        <path
            d="M4.00654 40.1236H12.4893V19.5227L0.371094 10.4341V36.4881C0.371094 38.4997 2.00099 40.1236 4.00654 40.1236Z"
            fill="#4285F4" />
        <path
            d="M41.5732 40.1236H50.056C52.0676 40.1236 53.6914 38.4937 53.6914 36.4881V10.4341L41.5732 19.5227"
            fill="#34A853" />
        <path
            d="M41.5732 3.7693V19.5229L53.6914 10.4343V5.58702C53.6914 1.09118 48.5594 -1.47181 44.9663 1.22448"
            fill="#FBBC04" />
        <path d="M12.4893 19.5227V3.76904L27.0311 14.6754L41.5729 3.76904V19.5227L27.0311 30.429"
              fill="#EA4335" />
        <path
            d="M0.371094 5.58702V10.4343L12.4893 19.5229V3.7693L9.09617 1.22448C5.49708 -1.47181 0.371094 1.09118 0.371094 5.58702Z"
            fill="#C5221F" />
    </svg>
</button>
