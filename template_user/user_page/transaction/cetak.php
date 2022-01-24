<!DOCTYPE html>
<html>
<head>
	<title>Print Nota</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <style>
        /* reset */
        *
        {
            border: 0;
            box-sizing: content-box;
            color: inherit;
            font-family: inherit;
            font-size: inherit;
            font-style: inherit;
            font-weight: inherit;
            line-height: inherit;
            list-style: none;
            margin: 0;
            padding: 0;
            text-decoration: none;
            vertical-align: top;
        }
        
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400&display=swap');
        /* content editable */

        *[] { border-radius: 0.25em; min-width: 1em; outline: 0; }

        *[] { cursor: pointer; }

        *[]:hover, *[]:focus, td:hover *[], td:focus *[], img.hover { background: #DEF; box-shadow: 0 0 1em 0.5em #DEF; }

        span[] { display: inline-block; }

        /* heading */

        h1 { font: bold 100% sans-serif; letter-spacing: 0.5em; text-align: center; text-transform: uppercase; }

        /* table */

        table { font-size: 90%; table-layout: fixed; width: 100%; }
        table { border-collapse: separate; border-spacing: 2px; }
        th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
        th, td { border-radius: 0.25em; border-style: solid; }
        th { background: #EEE; border-color: #BBB; }
        td { border-color: #DDD; }

        /* page */

        html { font: 16px/1 'Poppins', sans-serif; overflow: auto; padding: 0.5in; }
        html { background: #999; cursor: default; }

        body { box-sizing: border-box; height: 11in; margin: 0 auto; overflow: hidden; padding: 0.5in; width: 8.5in; }
        body { background: #FFF; border-radius: 1px; box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5); background-image:url("Group 3 (7).svg"); background-size: 400px;}

        /* header */

        header { margin: 0 0 3em; }
        header:after { clear: both; content: ""; display: table; }

        header h1 { background-color: #3056D3; border-radius: 0.25em; color: #FFF; margin: 0 0 1em; padding: 0.5em 0; }
        header address { float: left; font-size: 75%; font-style: normal; line-height: 1.25; margin: 0 1em 1em 0; }
        header address p { margin: 0 0 0.25em; font-size: 1rem;}
        header span, header img { display: block; float: right; }
        header span { margin: 0 0 1em 1em; max-height: 25%; max-width: 60%; position: relative; }
        header img { max-height: 100%; max-width: 100%; }
        header input { cursor: pointer; -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; height: 100%; left: 0; opacity: 0; position: absolute; top: 0; width: 100%; }

        /* article */

        article, article address, table.meta, table.inventory { margin: 0 0 3em; }
        article:after { clear: both; content: ""; display: table; }
        article h1 { clip: rect(0 0 0 0); position: absolute; }

        article address { float: left; font-size: 150%; font-weight: bold; }
        article address .logo{
            height: 100px;
            width: 200px;
            /* margin-bottom: 2.3rem; */
        }
        article address p{margin-bottom: -2rem;}

        /* table meta & balance */

        table.meta, table.balance { float: right; width: 36%; }
        table.meta:after, table.balance:after { clear: both; content: ""; display: table; }

        /* table meta */

        table.meta th { width: 45%; background-color: #90A6EC; color: #000;}
        table.meta td { width: 55%; background-color: #fff;}

        /* table items */

        table.inventory { clear: both; width: 100%; }
        table.inventory th { font-weight: bold; text-align: center; background-color: #90A6EC; color: #000;}

        table.inventory td:nth-child(1) { width: 26%; }
        table.inventory td:nth-child(2) { width: 38%; }
        table.inventory td:nth-child(3) { text-align: right; width: 12%; }
        table.inventory td:nth-child(4) { text-align: right; width: 12%; }
        table.inventory td:nth-child(5) { text-align: right; width: 12%; }

        table.inventory tbody tr td {text-align: center; background-color: #fff;}

        /* table balance */

        table.balance th, table.balance td { width: 50%; background-color: #F4B02B; color: #000;}
        table.balance td, table.balance th { text-align: center; }

        /* aside */

        aside h1 { border: none; border-width: 0 0 1px; margin: 0 0 1em; }
        aside h1 { border-color: #999; border-bottom-style: solid; }



        @media print {
            * { -webkit-print-color-adjust: exact; }
            html { background: none; padding: 0; }
            body { box-shadow: none; margin: 0; }
            span:empty { display: none; }
            .add, .cut { display: none; }
        }

        @page { margin: 0; }
    </style>
</head>
<body>
    <?php
        include '../../../koneksi.php';
        $tr_id = $_GET["id"];
        $query ="SELECT transaction.*, packet.type, packet.price, user.name as user_name, member.name as member_name, member.address, member.phone, transaction_detail.qty
                FROM transaction
                JOIN user ON user.id = transaction.id_user
                JOIN member ON member.id = transaction.id_member
                JOIN transaction_detail ON transaction_detail.transaction_id = transaction.id
                JOIN packet ON packet.id = transaction_detail.packet_id
                WHERE transaction.id = '$tr_id' ";
                // echo $sql;
        $data_trans = mysqli_query($conn, $query);
        $data = mysqli_fetch_assoc($data_trans);

        // var_dump($data); die();
    ?>
		<header>
			<h1>NOTA</h1>
			<address >
				<p><?php echo $data['member_name']; ?></p>
				<p><?php echo $data['address']; ?></p>
				<p><?php echo $data['phone']; ?></p>
			</address>
			<span><img alt="" src="http://www.jonathantneal.com/examples/invoice/logo.png"><input type="file" accept="image/*"></span>
		</header>
		<article>
			<h1>Recipient</h1>
			<address >
				<p>LAUNDRY</p>
                <img src="CHBlue.svg" alt="" class="logo">
			</address>
			<table class="meta">
				<tr>
					<th><span>Transaction Id</span></th>
					<td><span ><?= $tr_id; ?></span></td>
				</tr>
				<tr>
					<th><span >Date</span></th>
					<td><span ><?php echo date('d F Y', strtotime($data['date'])); ?></span></td>
				</tr> 
				<tr>
					<th><span >Total</span></th>
					<td><span id="prefix" >IDR </span><span><?php echo $data['qty']*$data['price']; ?></span></td>
				</tr>
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span >Item</span></th>
						<th><span >Price</span></th>
						<th><span >Quantity</span></th>
						<th><span >Price</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><a class="cut"></a><span ><?php echo $data['type']; ?></span></td>
						<td><span data-prefix>IDR </span><span ><?php echo $data['price']; ?></span></td>
						<td style="text-align: center;"><span ><?php echo $data['qty']; ?></span></td>
						<td style="text-align: center;"><span data-prefix>IDR </span><span><?php echo $data['qty']*$data['price']; ?></span></td>
					</tr>
				</tbody>
			</table>
	
			<table class="balance">
				<tr>
					<th><span >Total</span></th>
					<td><span data-prefix>IDR </span><span><?php echo $data['qty']*$data['price']; ?></span></td>
				</tr>
			</table>
		</article>

        <script>window.print();</script>
</body>
</html>