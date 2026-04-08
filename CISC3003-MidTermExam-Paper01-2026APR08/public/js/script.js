const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

// 点击“SIGN UP”按钮，激活向右滑动动画
registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

// 点击“SIGN IN”按钮，返回默认登录视图
loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});