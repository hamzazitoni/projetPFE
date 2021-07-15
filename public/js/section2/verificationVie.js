export function verificationVie() {
    let vie = 0;
    $.get('http://127.0.0.1:8000/vie/get',
        (data) => {
            vie = data.vie;
        }).then(() => {
        if (vie == 0) {
            $('.description').hide();
            $('#challenge1').hide();
            $('#challenge2').hide();
            $('.vie').show();
        }
    })
}

export function finalPopup() {
    let status = 0;
    $.get('http://127.0.0.1:8000/stars/add', { sectionID: 2 },
        (data) => {
            status = data.status;
        }).then(() => {
        $('#challenge1').hide();
        $('#descriptionBigBox').hide();
        $('#challenge2').hide();
        if (status !== 0) {
            $('#starStus').html('');
        }
        $('#final').show();
    })

}
