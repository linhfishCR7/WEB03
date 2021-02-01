<section class="paper-toolbar paper-toolbar-top no-print">
    <form >
        <input type="button" class="btn btn-primary" value="Click vào đây để in" onClick="window.print()" />
    </form>

    @yield('paper-toolbar-top')
</section>

<section class="paper-toolbar paper-toolbar-bottom no-print">
    <form>
        <input type="button" class="btn btn-primary" value="Click vào đây để in" onClick="window.print()" />
    </form>
    @yield('paper-toolbar-bottom')
</section>