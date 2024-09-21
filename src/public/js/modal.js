document.addEventListener('DOMContentLoaded', function() {

var modal = document.getElementById('myModal');
var btn = document.getElementById('openModal');
var span = document.getElementsByClassName('close')[0];

btn.onclick = function() {
    modal.style.display = 'block';
}

span.onclick = function() {
    modal.style.display = 'none';
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}

var detailBtns = document.querySelectorAll('.details-btn');

detailBtns.forEach(function(btn) {
    btn.onclick = function() {
        var last_name = this.getAttribute('data-last_name');
        var first_name = this.getAttribute('data-first_name');
        var gender = this.getAttribute('data-gender');
        var email = this.getAttribute('data-email');
        var tel = this.getAttribute('data-tel');
        var address = this.getAttribute('data-address');
        var building = this.getAttribute('data-building');
        var content = this.getAttribute('data-content');
        var detail = this.getAttribute('data-detail');

        document.querySelector('.modal-content').innerHTML = `
            <span class="close">&times;</span>
            <h2>お客様情報</h2>
            <p><strong>お名前: </strong>${last_name} ${first_name}</p>
            <p><strong>性別: </strong>${gender}</p>
            <p><strong>メールアドレス: </strong>${email}</p>
            <p><strong>電話番号: </strong>${tel}</p>
            <p><strong>住所: </strong>${address}</p>
            <p><strong>建物名: </strong>${building}</p>
            <p><strong>お問い合わせの種類: </strong>${content}</p>
            <p><strong>お問い合わせ内容: </strong>${detail}</p>
        `;

        modal.style.display = 'block';

        document.querySelector('.close').onclick = function() {
            modal.style.display = 'none';
        };
    };
});
});
