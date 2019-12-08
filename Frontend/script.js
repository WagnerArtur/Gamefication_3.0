const form = document.getElementById('listar');

				form.addEventListener('submit', function (e) {
					e.preventDefault();

					fetch('https://wagnerdix.000webhostapp.com/backend/listar.php', {
						method: 'get'
					}).then(function (res) {
						return res.json();
					});

				});
				
				
				function save(){
				//const form = document.getElementById('formulario');
				
					const formData = new FormData();
					
					const nome_jogo = document.getElementById('nome_jogo');
					
					formData.append('nome_jogo', nome_jogo);

					
					
					fetch('https://wagnerdix.000webhostapp.com/save.php', {
						method: 'post',
						body: formData
					}).then(function (res) {
						return res.text();
					}).then(function (text) {
						console.log(text);
					}).catch(function (error) {
						console.error(error);
					})
				}
			
				const myForm = document.getElementById('formulario');

				myForm.addEventListener('submit', function (e) {
					e.preventDefault();

					const formData = new FormData(this);

					fetch('https://wagnerdix.000webhostapp.com/save.php', {
						method: 'post',
						body: formData
					}).then(function (res) {
						return res.text();
					}).then(function (text) {
						console.log(text);
					}).catch(function (error) {
						console.error(error);
					})

				});
