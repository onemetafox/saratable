<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e(__('Mail')); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        *{
            font-family: 'Open Sans', sans-serif;
        }
        .mail-container {
            max-width: 650px;
            margin: 0 auto;
            text-align: center;
            background-color: #f2f2f2;
            padding: 40px 0;
        }
        .inner-wrap {
            background-color: #fff;
            margin: 40px;
            padding: 30px 20px;
            text-align: left;
            box-shadow: 0 0 20px 0 rgba(0,0,0,0.01);
        }
        .inner-wrap p {
            font-size: 16px;
            line-height: 26px;
            color: #656565;
            margin: 0;
            margin-bottom: 20px;
        }
        .message-wrap {
            background-color: #f2f2f2;
            padding: 30px;
            margin-top: 40px;
        }

        .message-wrap p {
            font-size: 14px;
            line-height: 26px;
        }
        .btn-wrap {
            text-align: center;
        }

        .btn-wrap .anchor-btn {
            background-color: #111d5c;
            color: #fff;
            font-size: 14px;
            line-height: 26px;
            font-weight: 500;
            text-transform: capitalize;
            text-decoration: none;
            padding: 8px 20px;
            display: inline-block;
            margin-top: 40px;
            border-radius: 5px;
            transition: all 300ms;
        }

        .btn-wrap .anchor-btn:hover {
            opacity: .8;
        }
        table {
            margin: 0 auto;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table td, table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        table tr:nth-child(even){background-color: #f2f2f2;}

        table tr:hover {background-color: #ddd;}

        table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #111d5c;
            color: white;
        }

        .logo-wrapper img{
            max-width: 200px;
        }
    </style>
</head>
<body>

<div class="mail-container">
    <div class="logo-wrapper">
        <a href="<?php echo e(url('/')); ?>">
            <img src="<?php echo e(asset('assets/images/'.$gs->logo)); ?>" alt="logo" />
        </a>
    </div>
    <div class="inner-wrap">
        <?php
            echo $email_body;
        ?>
    </div>

</div>

</body>
</html>
<?php /**PATH F:\xampp\htdocs\latest\listing\project\resources\views/admin/email/mailbody.blade.php ENDPATH**/ ?>