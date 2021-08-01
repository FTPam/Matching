let wantTimeCount = 1;

function addTimeSelectionBox(spanID) {
    if (wantTimeCount < 5) {
        //空行
        if(wantTimeCount>0){
            document.getElementById('wantTime').insertAdjacentElement('beforeend',document.createElement('html'));
        }
        createSelectionBox(spanID)
        //已添加的时间段次数+1
        wantTimeCount++;
    } else {
        window.alert(" 您最多可以添加五个时间");
    }
}

function createSelectionBox(spanID){
    //获取显示表格的元素
    let span = document.getElementById(spanID);
    //创建两个新的下拉菜单
    let weekSelectionBox = document.createElement('select')
    let classSelectionBox = document.createElement('select')
    //分别给两个下拉菜单创建元素
    for (let i = 1; i <= 7; i++) {
        let option = document.createElement('option');
        option.id = 'week' + i;
        option.text = "星期" + i;
        weekSelectionBox.appendChild(option);
    }
    for (let i = 1; i <= 5; i++) {
        let option = document.createElement('option');
        option.id = 'class' + i;
        option.text = "第" + i + "讲";
        classSelectionBox.appendChild(option);
    }
    //将创建好的两个下拉菜单添加到显示区域
    span.appendChild(weekSelectionBox);
    span.appendChild(classSelectionBox);
}

function checkForm(){
    let value = document.getElementById('classCode').value;
    //无论值是否满足要求，写cookie
    document.cookie="classCode="+value;
    if(!value){
        window.alert('请填写课程代码！');
    }else if(isNaN(value) || value.toString().length!=8) {
        window.alert('请输入正确的课程代码！（8位数字）')
    }
}