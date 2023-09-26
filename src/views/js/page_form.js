core.addVar('result', ['waiting']);
core.addVar('result2', ['waiting']);
core.addVar('result3', ['waiting']);

core.addVar('update', 'result');
core.addVar('update2', 'result2');
core.addVar('update3', 'result3');

core.addVar('notification', {
    notify: {
        title: 'Form Success',
        text: 'Data is sended!',
        icon: 'success',
        toast: true,
        timer: 1000,
        timerProgressBar: true,
        position: 'top-end',
        showConfirmButton: false,
    }
});

core.addVar('notification2', {
    modal: {
        title: 'Do you want to send post?',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: "Send",
        denyButtonText: "Don't send",
    },
    notify: {
        title: 'Form Success',
        text: 'Data is sended!',
        icon: 'success',
        toast: true,
        timer: 1000,
        timerProgressBar: true,
        position: 'top-end',
        showConfirmButton: false,
    }
});