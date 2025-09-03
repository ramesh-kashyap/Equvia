<link rel="stylesheet" href="{{ asset('static/iziToast.min.css') }}">

<script src="{{ asset('static/iziToast.min.js') }}"></script>
<style>
    .iziToast {
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
    font-family: 'Segoe UI', sans-serif;
}
 .iziToast-icon > i {
    font-size: 24px;
    transition: none !important;
}

    </style>

@if(session()->has('notify'))
    @foreach(session('notify') as $msg)
        <script>
            "use strict";
            iziToast.{{ $msg[0] }}({
                message: "{{ __($msg[1]) }}",
                position: "center",
                timeout: 2500,
                backgroundColor: "#111",         // Dark background
                messageColor: "#fff",             // White text
                icon: null, // disable class-based icon      // Check icon            // Check icon
                iconColor: "#4CAF50",             // Green icon
                theme: "dark",
                progressBar: false,
                transitionIn: "fadeInDown",
                transitionOut: "fadeOutUp",
                close: false,
                layout: 2,                        // Text below icon (like your screenshot)
                messageSize: "16"
            });
        </script>
    @endforeach
@endif

@if ($errors->any())
    @php
        $collection = collect($errors->all());
        $errors = $collection->unique();
    @endphp

    <script>
        "use strict";
        @foreach ($errors as $error)
        iziToast.error({
            message: '{{ __($error) }}',
            position: "center",
            timeout: 3000,
            backgroundColor: "#300",             // Dark red
            messageColor: "#fff",
            icon: null, // disable class-based icon      // Check icon
            iconColor: "#f44336",                // Red cross icon
            theme: "dark",
            progressBar: false,
            transitionIn: "fadeInDown",
            transitionOut: "fadeOutUp",
            close: false,
            layout: 2,
            messageSize: "16"
        });
        @endforeach
    </script>
@endif

<script>
    "use strict";
    function notify(status, message) {
        iziToast[status]({
            message: message,
            position: "center",
            timeout: 2500,
            backgroundColor: "#111",
            messageColor: "#fff",
            icon: status === 'success' ? "icon-check" : "icon-close",
            iconColor: status === 'success' ? "#4CAF50" : "#f44336",
            theme: "dark",
            progressBar: false,
            transitionIn: "fadeInDown",
            transitionOut: "fadeOutUp",
            close: false,
            layout: 2,
            messageSize: "16"
        });
    }
</script>