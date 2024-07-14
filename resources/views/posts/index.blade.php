<!DOCTYPE html>
<html>

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"><!-- ① -->

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>タブ切り替えの例</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 20px;
		}

		.tab {
			overflow: hidden;
			border-bottom: 1px solid #ccc;
		}

		.tab button {
			background-color: inherit;
			border: none;
			outline: none;
			cursor: pointer;
			padding: 14px 16px;
			transition: 0.3s;
			font-size: 17px;
		}

		.tab button:hover {
			background-color: #ddd;
		}

		.tab button.active {
			background-color: #ccc;
		}

		.tabcontent {
			display: none;
			padding: 20px;
			border: 1px solid #ccc;
			border-top: none;
		}
	</style>
</head>


<body>
	<h1>タブ切り替えのデモ</h1>

	<div class="tab">
		<button class="tablinks" onclick="openTab(event,'')">すべて</button>
		<button class="tablinks" onclick="openTab(event, '1')">建物</button>
		<button class="tablinks" onclick="openTab(event, '2')">工芸品</button>
		<button class="tablinks" onclick="openTab(event, '3')">景色</button>
		<button class="tablinks" onclick="openTab(event, '4')">食べ物</button>
	</div>
@foreach ($posts as $post)
                   
               
            
	<div id="{{ $post->category->id }}" class="tabcontent tab{{$post->category->id}}">
		
		<a>{{ $post->title }}</a>
		<a>{{ $post->category->name }}</a>
	</div>
	

	
@endforeach
	<script>
		function openTab(evt, tabName) {
			const tabcontent = document.getElementsByClassName('tabcontent');
				for (let i = 0; i < tabcontent.length; i++) {
					tabcontent[i].style.display = 'none';
				}
			if(tabName!==''){
			// 全てのタブコンテンツを取得し、非表示にする
			
				const tabclass = document.getElementsByClassName(`tab${tabName}`);
				for (let i = 0; i < tabclass.length; i++) {
					tabclass[i].style.display = 'block';
				}
		
			}
			else{
				
				for (let i = 0; i < tabcontent.length; i++) {
					tabcontent[i].style.display = 'block';
				}
			}
			const tablinks = document.getElementsByClassName('tablinks');
			for (let i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(' active', '');
			}
			evt.currentTarget.className += ' active';
		}
		

	</script>
</body>

</html>