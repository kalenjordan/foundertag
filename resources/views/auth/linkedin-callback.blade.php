<?php
/** @var \App\User $user */
?>

<html>
<body>
    <script type="text/javascript">
        opener.Events.$emit('user-authenticated', JSON.stringify({!! Auth::user() ? json_encode(Auth::user()->toArrayForCookie()) : null  !!}));
        window.close();
    </script>
</body>
</html>