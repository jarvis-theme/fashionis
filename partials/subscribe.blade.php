<div class="subscribe">
    <h1>Newsletter</h1>
    <h3>Dapatkan promo menarik dari toko kami segera!</h3>
    <span>
        <img src="{{url(dirTemaToko().'fashionis/assets/img/mail.png')}}">
        <form action="{{@$mailing->action}}" method="post" class="form-subscribe" target="_blank">
            <div class="form-group">
                <input type="text" name="email" class="email-field" placeholder="Enter your email" name="EMAIL" class="input-medium required email" id="newsletter mce-EMAIL" {{ @$mailing->action==''?'disabled="disabled"':'' }} >
            </div>
            <div class="form-group">
                <button class="btn-subscribe" type="submit" {{ @$mailing->action==''?'disabled="disabled" style="opacity: 0.5; cursor: default;"':'' }}><span>subscribe</span></button>
            </div>
        </form>
    </span>
</div>