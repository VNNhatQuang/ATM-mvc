var model = document.getElementById("register");

// Mở form đăng ký
var register = document.querySelector("#form>button");
register.onclick = function ShowModel() {
	Object.assign(model.style, {
	    transform: 'none',
	})
}

// Đóng form đăng ký
var close = document.getElementById("close");
close.onclick = function HideModel() {
    Object.assign(model.style, {
	    transform: 'translateY(-100%)',
	})
};
var spaceClose = document.querySelector("#register>#space-close");
spaceClose.onclick = function HideModel() {
	Object.assign(model.style, {
	    transform: 'translateY(-100%)',
	})
};