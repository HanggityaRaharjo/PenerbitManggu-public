<!DOCTYPE html>
<html>
<head>
	<title>Pengajuan Royalti</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="border">
	<style type="text/css">
		h4,div,p{
			margin:0;
			padding:0;
			line-height: 100%;
		}
	</style>
	<!-- Content -->
	<div class="border border-dark">
		<table class="mb-3" style="width:100%;">
		<thead>

			<tr>
				<td style="font-weight: bold;" align="left">INVOICE</td>
				<td style="font-weight: bold;" align="right">PENERBIT MANGGU</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<p>Kode Pengajuan</p>
					<p>{{ $data->dataroyalti->kode }}</p>
				</td>
			</tr>
		</tbody>
		</table>
		
		

			<table align="right" class="mb-3">
				<tbody>

					<tr>
					<td>Nama</td>
					<td colspan="2">: {{ $data->nama }}</td>
					</tr>
				
					<tr>
						<td>Email</td>
						<td colspan="2">: {{ $data->email }}</td>
					</tr>
					<tr>
						<td>Nomor Rekening</td>
						<td colspan="2">: {{ $data->no_rekening }}({{ $data->pilihan_bank }})</td>
					</tr>
					<tr>
						<td>Tanggal Pengajuan</td>
						<td colspan="2">: {{ $data->created_at }}</td>
					</tr>
					<tr>
						<td colspan="3"></td>
					</tr>
				
				</tbody>
			</table>
	

		<div class="mx-1 mb-3">
			<table border="2" width="100%">
				<tr>
					<td>Judul Buku</td>
					<td style="text-align:justify;" colspan="2">{{ $data->dataroyalti->judul}}</td>
					
				</tr>
				<tr>
					<td>Penulis</td>
					<td colspan="2">{{ $data->dataroyalti->penulis }}</td>
					
				</tr>
				<tr>
					<td>Harga</td>
					<td></td>
					<td>Rp.{{ $data->dataroyalti->harga }}</td>
				</tr>
				<tr>
					<td>Nilai Royalti(15%)</td>
					<td></td>
					<td>Rp.{{ $data->dataroyalti->nilairoyalti }}</td>
				</tr>
				<tr>
					<td>Hutang Royalti</td>
					<td></td>
					<td>Rp.{{ $data->dataroyalti->hutangroyalti }}</td>
				</tr>
				<tr>
					<td>Terjual</td>
					<td></td>
					<td>{{ $data->dataroyalti->terjual }}</td>
				</tr>
				<tr>
					<td>Saldo Royalti</td>
					<td></td>
					<td>Rp.{{ $data->dataroyalti->saldoroyalti }}</td>
				</tr>
				<tr>
					<td>Penambahan(Saldo)</td>
					<td></td>
					<td>Rp.{{ $data->dataroyalti->penambahan }}</td>
				</tr>
				<tr>
					<td>PPH Pasal 21(15%)</td>
					<td></td>
					<td>Rp.{{ $data->dataroyalti->pphpenulis }}</td>
				</tr>
				<tr>
					<td>Potongan Bank</td>
					<td></td>
					<td>Rp.{{ $data->dataroyalti->adminbank }}</td>
				</tr>
				<tr>
					<td colspan="2" style="text-align:center;">Total</td>
					<td>Rp.{{ $data->dataroyalti->saldonet }}</td>
				</tr>
				
			</table>
		</div>

	</div>
		<!-- Content -->
 
</body>
</html>