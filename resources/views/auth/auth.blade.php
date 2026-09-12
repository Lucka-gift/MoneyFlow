<!DOCTYPE html>
<html lang="en">
@include('components.head', ['title' => $title ?? 'Default Title', 'css' => $css ?? []])
<body class="bg-white font-poppins overflow-hidden">
    @yield('content')
</body>
</html>
