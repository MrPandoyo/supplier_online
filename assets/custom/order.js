$(".jml").on('change',function () {
	var id = $(this).attr('name');
	var harga = $(this).data('harga');
	var jml = $(this).val();
	var subtotal = jml*harga;
	$("#"+id).html(subtotal);
	$("#"+id).data('total',subtotal);
	hitungTotal();
})

function hitungTotal(){
	var total = 0;
	$('.subtotal').each(function () {
		total = total+$(this).data('total');
	})
	$("#totals").html(total);
	$("#fieldTotals").val(total);
}
