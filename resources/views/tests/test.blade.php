<div>
    <!-- He who is contented is rich. - Laozi -->
    test
    <form method="post" action="{{route('test2')}}">
        @csrf
        <input type="text" name="name">
        <input type="submit" value="送信">
    </form>
</div>
