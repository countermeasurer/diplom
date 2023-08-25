$(".calc").click(function (e) {
    e.preventDefault();
  let 
/* Ввод входных переменных для 3 расчета*/
        pr3 = $('input[name="pr3"]').val(),
        qr3 = $('input[name="qr3"]').val(),
        qr32 = $('input[name="qr32"]').val(),
        dskv3 = $('input[name="dskv3"]').val(),
        dn23 = $('input[name="dn23"]').val(),
     /* Формулы для расчета 3 задачи*/
     xl = (qr3/qr32);
    xll = (3.32*xl)/ 7.26;
    n  = xll.toFixed(2);
    K = qr3/Math.pow(1022,n).toFixed(4);
    al = dskv3/1000;
    bl = dn23/1000;
    cl = Math.pow(10,6)*K;
    cll = cl * Math.pow(n,0.387);
    clll = Math.pow(0.03937,n);
    cxl = Math.pow(dskv3-dn23,n);
    clllx =clll*cxl;
    cxlx = clllx*pr3; 
    xr3 = cxl;
    vkr = 0.005*(Math.pow(1050,0.8264));
    qqr = Math.pow(al,2)-Math.pow(bl,2);
    qkrr = 0.785*vkr;
    qrkk = qkrr*qqr
    qkr = qrkk*1000;
/*Ввод выходных значений для 3 расчета*/
      n_text = $('input[name="n"]'),
        K_text = $('input[name="K"]'),
        xr3_text = $('input[name="xr3"]'),
        vkr_text = $('input[name="vkr"]'),
        qkr_text = $('input[name="qkr"]'),
       /*Ввод выходных значений для 3 расчета */
      n_text.val(n);
      K_text.val(K);
      xr3_text.val(xr3);
      vkr_text.val(vkr);
      qkr_text.val(qkr);
      $.ajax({
        url: '../../calc_db3.php',
        type: 'POST',
        data: {
            /*Отправка всех значений  3 расчета */
            pr3:pr3, 
            qr3:qr3, 
            qr32:qr32, 
            dskv3:dskv3, 
            dn23:dn23, 
            n:n,
            K:K,
            xr3:xr3,
            vkr:vkr,
            qkr:qkr,
                    }
    });
});

$(".demo").click(function () {
let
/*Автозаполнение демо значений для 3 расчета */
  pr3_text = $('input[name="pr3"]'),
 qr3_text = $('input[name="qr3"]'),
 qr32_text = $('input[name="qr32"]');
 dskv3_text = $('input[name="dskv3"]');
 dn23_text = $('input[name="dn23"]');
  pr3_text.val(1677); 
  qr3_text.val(64);
  qr32_text.val(37);
  dskv3_text.val(216);
  dn23_text.val(178);
  });