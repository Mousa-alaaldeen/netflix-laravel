<!DOCTYPE html>
<html lang="en">
@include('them.partial.head')

<body>

    @include('them.partial.loader')

    @include('them.partial.nav')
    <main>
        @yield('content') 
    </main>
    @include('them.partial.footer')

    <div id="back-to-top">
        <a class="top" id="top" href="#top"> <i class="ion-ios-arrow-up"></i> </a>
    </div>
</body>

   @include('them.partial.script')

</html>