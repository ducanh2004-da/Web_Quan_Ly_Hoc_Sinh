
const nameValue = document.getElementById('name');
const ngSinh = document.getElementById('bdate');
const ngNghiep = document.getElementById('job');
const currentDate = document.querySelector('.current');
const daysTag = document.querySelector('.days');
const monthNames = [
    'January', 'February', 'March', 'April', 'May', 'June', 
    'July', 'August', 'September', 'October', 'November', 'December'
];

function updateCurrentDate() {
    const date = new Date();
    const currentYear = date.getFullYear();
    const currentMonth = date.getMonth();
    const currentMonthText = monthNames[currentMonth];
    const formattedDate = `${currentMonthText} ${currentYear}`;
    
    currentDate.innerHTML = formattedDate;
    console.log(date, currentYear, currentMonthText);
}

function renderDate() {
    const lastDateOfMonth = new Date(currentYear, currentMonth + 1, 0).getDate(); 
    let dayHTML = `<div class="top7"><p>1</p>`;
    
    for (let i = 2; i <= lastDateOfMonth; i++) {
        dayHTML += `<p>${i}</p>`;
        if (i % 7 === 0) {
            dayHTML += `</div><div class="top7">`;
        }
    }
    
    daysTag.innerHTML = dayHTML;
}

$(document).ready(function() {
     $(document).on('click', '.danhsach', function() {
        $('.danhsach').toggleClass("active");
        $('.addnew').removeClass("active");
        $('.lich').removeClass("active");
        $('.todo').removeClass("active");
        $('#AddNew').removeClass("active");
        $('#DanhSach').toggleClass("active");
        $('#TrucNhat').removeClass("active");
        $('#Todo').removeClass("active");
        $('#Todo').addClass("fade");
    });

    $(document).on('click', '.addnew', function() {
        $('.danhsach').removeClass("active");
        $('.addnew').toggleClass("active");
        $('.lich').removeClass("active");
        $('.todo').removeClass("active");
        $('#AddNew').toggleClass("active");
        $('#DanhSach').removeClass("active");
        $('#TrucNhat').removeClass("active");
        $('#Todo').removeClass("active");
        $('#Todo').addClass("fade");
        $('.upfile').removeClass('active');
    });

    $(document).on('click', '.lich', function() {
        $('.lich').toggleClass("active");
        $('.addnew').removeClass("active");
        $('.danhsach').removeClass("active");
        $('.todo').removeClass("active");
        $('#AddNew').removeClass("active");
        $('#DanhSach').removeClass("active");
        $('#TrucNhat').toggleClass("active");
        $('#TrucNhat').removeClass("fade");
        $('#Todo').removeClass("active");
        $('#Todo').addClass("fade");
        $('.upfile').removeClass('active');
    });

    $(document).on('click', '.todo', function() {
        $('.lich').removeClass("active");
        $('.addnew').removeClass("active");
        $('.danhsach').removeClass("active");
        $('.todo').toggleClass("active");
        $('#AddNew').removeClass("active");
        $('#DanhSach').removeClass("active");
        $('#TrucNhat').removeClass("active");
        $('#Todo').toggleClass("active");
        $('#Todo').toggleClass("fade");
        $('.upfile').removeClass('active');
    });

    $(document).on('click', '.upload', function() {
        $('.lich').removeClass("active");
        $('.addnew').removeClass("active");
        $('.danhsach').removeClass("active");
        $('.todo').removeClass("active");
        $('#AddNew').removeClass("active");
        $('#DanhSach').removeClass("active");
        $('#TrucNhat').removeClass("active");
        $('#Todo').removeClass("active");
        $('#Todo').removeClass("fade");
        $('.upfile').toggleClass('active');
        $('.upfile').toggleClass('fade');
    });

    $(document).on('click', '.addbtn', function() {
        const taskText = $('#addtodo').val();
        const taskItem = `
            <li class="task-item">
                ${taskText}
                <img src="./delete.png" class="delete" alt="Delete">
            </li>`;
        
        $('#task').append(taskItem);
    });

    $(document).on('click', '.deleteAdd', function() {
        $('.themds').css('display','none');
    });

    $(document).on('click', '.bonus', function() {
        $('.themds').css('display','block');
    });

    $(document).on('click', '#task', function(e) {
        const target = $(e.target);
        if (target.is('li')) {
            target.toggleClass("checked");
        } else if (target.is('img')) {
            target.closest('li').remove();
        }
    });

    $(document).on('click', '.next', function() {
        currentMonth = (currentMonth + 1) % 12;
        currentYear += currentMonth === 0 ? 1 : 0;
        updateCurrentDate();
        renderDate();
    });

    $(document).on('click', '.prev', function() {
        currentMonth = (currentMonth - 1 + 12) % 12;
        currentYear -= currentMonth === 11 ? 1 : 0;
        updateCurrentDate();
        renderDate();
    });

    updateCurrentDate();
    renderDate();
});