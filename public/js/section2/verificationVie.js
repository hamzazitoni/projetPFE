export function check() {
    let vie = 0;
    $.get('http://127.0.0.1:8000/vie/get',
        (data) => {
            vie = data.vie;
        })
    if (vie == 0) return true;
    return false;
}
export function verificationVie() {
    if (check()) {
        $('.description').hide();
        $('#challenge1').hide();
        $('.vie').show();
    }

}