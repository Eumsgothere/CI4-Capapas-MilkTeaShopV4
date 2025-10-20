<?php
$pageTitle = '';
$extraStyles = '';

switch ($page ?? '') {
    case 'landing':
        $pageTitle = 'Miltank Tea Shop';
        $extraStyles = '
            <style>
                * {margin:0;padding:0;box-sizing:border-box;}
                body {font-family:"Poppins",sans-serif;background:#fcebb7;color:#2f2f2f;line-height:1.6;}
                .banner {width:100%;text-align:center;background-color:#fcebb7;}
                .banner img {max-width:100%;height:auto;display:block;margin:0 auto;}
                .hero {background:#fff;text-align:center;padding:3rem 2rem;}
                .hero h2 {font-size:2rem;margin-bottom:1rem;color:#2f2f2f;}
                .hero p {font-size:1.1rem;max-width:600px;margin:0 auto;color:#555;}
                section {max-width:1000px;margin:2rem auto;padding:1rem 2rem;}
                section h2 {text-align:center;font-size:1.8rem;margin-bottom:1.5rem;color:#2f2f2f;}
                .best-sellers {display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:1.5rem;}
                .card {background:#fff;border-radius:10px;border:1px solid #ddd;overflow:hidden;box-shadow:0 4px 8px rgba(0,0,0,0.05);transition:transform .2s ease-in-out;}
                .card:hover {transform:translateY(-5px);}
                .card img {width:100%;height:180px;object-fit:cover;}
                .card-content {padding:1rem;text-align:center;}
                .about-us {margin-top:2rem;}
                .about-container {display:flex;flex-wrap:wrap;align-items:center;justify-content:center;gap:2rem;background:#f6b6c4;padding:2rem;border-radius:12px;color:#2f2f2f;}
                .about-text {flex:1;min-width:250px;font-size:1.4rem;color:#444;}
                .about-image img {max-width:250px;border-radius:10px;}
                .testimonials-section {max-width:1000px;margin:4rem auto;padding:0 1rem;}
                .testimonials-section h2 {text-align:center;color:#2f2f2f;margin-bottom:2rem;font-size:2rem;}
                .testimonials-grid {display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:1.5rem;}
            </style>
        ';
        break;

    case 'roadmap':
        $pageTitle = 'Miltank — Road Map';
        $extraStyles = '
            <style>
                *{box-sizing:border-box;margin:0;padding:0}
                body{font-family:system-ui,-apple-system,"Segoe UI",Roboto,Arial;background:#fcebb7;color:#2f2f2f}
                .page-title{text-align:center;padding:1rem 0;}
                .page-title h2{font-family:"Lilita One",cursive;font-size:3.5rem;color:#2f2f2f;}
                main{max-width:1000px;margin:28px auto;padding:0 16px;}
                .timeline{position:relative;padding:8px 0 48px;}
                .timeline::before{content:"";position:absolute;left:50%;top:0;bottom:0;width:4px;background:#e6e2e2;transform:translateX(-50%);border-radius:2px;}
                .item{position:relative;margin:28px 0;}
                .dot{position:absolute;left:50%;transform:translateX(-50%);top:10px;width:36px;height:36px;border-radius:50%;background:#f6b6c4;border:4px solid #fcebb7;display:flex;align-items:center;justify-content:center;font-weight:700;color:#2f2f2f;box-shadow:0 6px 12px rgba(0,0,0,0.06);z-index:2;}
                .card{width:45%;background:#fff;padding:16px;border-radius:10px;box-shadow:0 8px 20px rgba(0,0,0,0.06);}
                .left .card{margin-right:auto;}
                .right .card{margin-left:auto;}
                .title{font-weight:700;color:#2f2f2f;margin-bottom:6px;}
                .desc{color:#444;font-size:14px;}
                .status{display:inline-block;margin-top:10px;padding:6px 10px;border-radius:12px;color:#fff;font-weight:700;font-size:13px;}
                .done{background:#673ab7;}
                .backlog{background:#9e9e9e;}
                @media(max-width:760px){.timeline::before{left:28px;transform:none}.dot{left:28px;transform:none;top:0}.card{width:100%;margin-left:44px;margin-right:16px}.left .card,.right .card{margin:0 0 0 44px}}
            </style>
        ';
        break;

    case 'moodboard':
        $pageTitle = 'Miltank Tea Shop - Mood Board';
        $extraStyles = "
             <style>
            * { margin: 0; padding: 0; box-sizing: border-box; }
            body { font-family: 'Poppins', sans-serif; background: #fcebb7; color: #2f2f2f; display: flex; flex-direction: column; min-height: 100vh; }
            section { max-width: 1100px; margin: 2rem auto; padding: 0 2rem; }
            section h2 { text-align: center; font-size: 1.8rem; margin-bottom: 1.5rem; color: #4a90e2; font-family: 'Lilita One', cursive; }

            .palette { display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap; }
            .swatch { width: 120px; height: 120px; border-radius: 12px; display: flex; flex-direction: column; justify-content: center; align-items: center; font-size: 0.8rem; font-weight: 600; box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1); border: 3px solid #ddd; }
            .pink { background: #f6b6c4; }
            .cream { background: #fcebb7; }
            .blue { background: #4a90e2; color: #fff; }
            .dark { background: #2f2f2f; color: #fff; }
            .white { background: #fff; }

            .typography { display: flex; justify-content: center; gap: 3rem; flex-wrap: wrap; text-align: center; }
            .heading-font { font-family: 'Lilita One', cursive; font-size: 2rem; color: #4a90e2; }
            .body-font { font-family: 'Poppins', sans-serif; font-size: 1rem; color: #555; }

            .buttons { display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap; }
            .btn { padding: 0.7rem 1.5rem; border-radius: 8px; font-weight: 600; font-size: 1rem; cursor: pointer; transition: 0.3s; border: none; }
            .btn-primary { background: #f6b6c4; color: #2f2f2f; }
            .btn-primary:hover { background: #4a90e2; color: #fff; }
            .btn-secondary { background: #4a90e2; color: #fff; }
            .btn-secondary:hover { background: #2f2f2f; }
            .btn-bordered { background: transparent; border: 2px solid #f6b6c4; color: #2f2f2f; }
            .btn-bordered:hover { background: #f6b6c4; }
            .btn-disabled { background: #ddd; color: #999; cursor: not-allowed; }

            .card-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; }
            .card { background: #fff; border-radius: 14px; border: 2px solid #f6b6c4; overflow: hidden; box-shadow: 0 6px 12px rgba(0, 0, 0, 0.08); transition: transform 0.25s ease, box-shadow 0.25s ease; }
            .card:hover { transform: translateY(-8px); box-shadow: 0 10px 18px rgba(0, 0, 0, 0.15); }
            .card img { width: 100%; height: 200px; object-fit: cover; }
            .card-content { padding: 1rem; text-align: center; }
            .card-content h3 { margin-bottom: 0.5rem; font-family: 'Lilita One', cursive; }

            .logos { display: flex; justify-content: center; gap: 2rem; flex-wrap: wrap; }
            .logo { width: 120px; height: 120px; display: flex; justify-content: center; align-items: center; background: #f6b6c4; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); border-radius: 12px; overflow: hidden; }
            .circle { border-radius: 50%; }
            .logo img { width: 80%; height: auto; }

            .page-title { text-align: center; padding: 1rem 0; }
            .page-title h2 { font-family: 'Lilita One', cursive; font-size: 3.5rem; color: #2f2f2f; margin: 0; }
        </style>
    ";
        break;

    case 'signup':
        $pageTitle = 'Miltank Tea Shop - Sign Up';
        $extraStyles = '
            <style>
                body{font-family:"Poppins",sans-serif;background:#fcebb7;margin:0;padding:0;display:flex;flex-direction:column;min-height:100vh;}
                .container{flex:1;display:flex;justify-content:center;align-items:center;padding:2rem;}
                .card{background:#fff;padding:2rem;border-radius:10px;box-shadow:0 4px 12px rgba(0,0,0,0.1);width:100%;max-width:400px;}
                h2{text-align:center;margin-bottom:1.5rem;color:#2f2f2f;}
                label{display:block;margin:.5rem 0 .2rem;font-weight:bold;}
                input{width:100%;padding:.7rem;margin-bottom:1rem;border:1px solid #ccc;border-radius:6px;font-size:1rem;}
                button{width:100%;padding:.8rem;background:#f6b6c4;color:#fff;border:none;border-radius:6px;font-size:1rem;font-weight:bold;cursor:pointer;transition:.2s;}
                button:hover{background:#2f2f2f;}
                .extra{text-align:center;margin-top:1rem;}
                .extra a{color:#4a90e2;text-decoration:none;font-weight:bold;}
            </style>
        ';
        break;
    case 'login':
        $pageTitle = 'Miltank Tea Shop - Login';
        $extraStyles = '
            <style>
                body{font-family:"Poppins",sans-serif;background:#fcebb7;margin:0;padding:0;display:flex;flex-direction:column;min-height:100vh;}
                .container{flex:1;display:flex;justify-content:center;align-items:center;padding:2rem;}
                .card{background:#fff;padding:2rem;border-radius:10px;box-shadow:0 4px 12px rgba(0,0,0,0.1);width:100%;max-width:400px;}
                h2{text-align:center;margin-bottom:1.5rem;color:#2f2f2f;}
                label{display:block;margin:.5rem 0 .2rem;font-weight:bold;}
                input{width:100%;padding:.7rem;margin-bottom:1rem;border:1px solid #ccc;border-radius:6px;font-size:1rem;}
                button{width:100%;padding:.8rem;background:#f6b6c4;color:#fff;border:none;border-radius:6px;font-size:1rem;font-weight:bold;cursor:pointer;transition:.2s;}
                button:hover{background:#2f2f2f;}
                .extra{text-align:center;margin-top:1rem;}
                .extra a{color:#4a90e2;text-decoration:none;font-weight:bold;}
            </style>
        ';
        break;
    case 'menu':
        $pageTitle = 'Miltank Tea Shop — Menu';
        $extraStyles = '
            <style>
                body{font-family:"Poppins",sans-serif;background:#fcebb7;color:#2f2f2f;margin:0;padding:0;}
                .menu-header{text-align:center;padding:3rem 1rem 2rem;}
                .menu-header h1{font-size:2.5rem;color:#e36fa4;}
                .menu-header p{color:#555;font-size:1rem;max-width:600px;margin:1rem auto;}
                .menu-section{max-width:1000px;margin:0 auto 4rem;padding:0 2rem;}
                .menu-section h2{color:#4a90e2;font-size:1.8rem;border-bottom:3px solid #f6b6c4;padding-bottom:.5rem;margin-bottom:1.5rem;text-align:center;}
                .menu-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:1.5rem;}
                .menu-item{background:#fff;border-radius:12px;box-shadow:0 4px 8px rgba(0,0,0,0.05);text-align:center;padding:1rem;transition:transform .2s ease-in-out;}
                .menu-item:hover{transform:translateY(-5px);}
                .menu-item img{width:100%;height:160px;object-fit:cover;border-radius:8px;}
                .menu-item h3{margin:.8rem 0 .4rem;font-size:1.2rem;color:#2f2f2f;}
                .menu-item p{color:#777;font-size:.9rem;margin-bottom:.5rem;}
                .price{font-weight:bold;color:#e36fa4;}
            </style>
        ';
        break;

    case 'order':
        $pageTitle = 'Miltank Tea Shop — Order';
        $extraStyles = '
            <style>
                html,body{height:100%;margin:0;font-family:"Poppins",sans-serif;background:#fcebb7;color:#2f2f2f;display:flex;flex-direction:column;}
                main.menu-page{flex:1;}
                .order-container{max-width:800px;margin:2rem auto;padding:0 1rem;}
                h1{text-align:center;color:#e36fa4;margin-bottom:1rem;}
                .order-list{background:#fff;border-radius:12px;padding:1rem;box-shadow:0 4px 8px rgba(0,0,0,0.05);margin-bottom:2rem;}
                .order-item{display:flex;justify-content:space-between;margin-bottom:.5rem;}
                .total{font-weight:bold;margin-top:1rem;text-align:right;color:#e36fa4;}
                .btn-confirm{display:block;width:100%;padding:.8rem;background:#e36fa4;color:#fff;text-align:center;font-weight:bold;border-radius:8px;text-decoration:none;transition:background .2s ease;}
                .btn-confirm:hover{background:#d45b93;}
            </style>
        ';
        break;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Lilita+One&display=swap" rel="stylesheet">
    <?= $extraStyles ?>
</head>