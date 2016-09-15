var $burguerButton = document.getElementById('burguer');
var $menu = document.getElementById('menu');
	$burguerButton.addEventListener('touchstart', toggleMenu);

		function toggleMenu(){
		$menu.classList.toggle('active')
};