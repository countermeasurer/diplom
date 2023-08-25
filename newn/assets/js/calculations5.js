$(".closed").click(function (e) {
    e.preventDefault();
  let 
/* Ввод входных переменных для 5 расчета*/
       L5 = $('input[name="L5"]').val(),
        dskv5 = $('input[name="dskv5"]').val(),
        dn5 = $('input[name="dn5"]').val(),
        dvn5 = $('input[name="dvn5"]').val(),
        dn25 = $('input[name="dn25"]').val(),
        dn25a = $('input[name="dn25a"]').val(),
        Lybt5 = $('input[name="Lybt5"]').val(),
        pr5 = $('input[name="pr5"]').val(),
        qr5 = $('input[name="qr5"]').val(),
        qr56 = $('input[name="qr56"]').val(),
        ss = $('input[name="ss"]').val(),
     /* Формулы для расчета 5 задачи*/
     
nl5 = (qr56/qr5);
nxl = 3.32*nl5;
n5 = (nxl/7.20).toFixed(4);

Kx5 = Math.pow(511,n5);
K5 = (qr5/Kx5).toFixed(3);
vxl = Math.pow(dn5,2);
vxxl = ((Math.pow(dskv5,2)*1)-(Math.pow(dn5,2)*1) +(dn25a*1));
xlx = vxl/vxxl;
vxx55 = (0.45 + (xlx)).toFixed(3);
vx55 = (vxx55*ss).toFixed(3);

vm5 = (1.5*vx55).toFixed(3);

vkr55 = (12*Math.pow(10,3)*vm5);
vqr5 = (dskv5*1) - (dn5*1);
vqr51 = vkr55/vqr5;
vmkx = (2*(0.809*1)+(1*1));
vmky = (3*0.809);
vmk = vmkx/vmky;
vmkk = vqr51*vmk;
vmk51 = Math.pow(vmkk,0.809);
zxc = 2*Math.pow(10,-3)*K5*L5;
zxc2 = (dskv5*1)-(dn5*1);
zxc1 = zxc/zxc2;
vkr5 = (zxc1*vmk51).toFixed(2);

      n5_text = $('input[name="n5"]'),
        K5_text = $('input[name="K5"]'),
        vx55_text = $('input[name="vx55"]'),
        vm5_text = $('input[name="vm5"]'),
        vkr5_text = $('input[name="vkr5"]'),
       /*Ввод выходных значений для 5 расчета */
       n5_text.val(n5);
       K5_text.val(K5);
       vx55_text.val(vx55);
       vm5_text.val(vm5);
       vkr5_text.val(vkr5);
      $.ajax({
        url: '../../calc_db5.php',
        type: 'POST',
        data: {
            /*Отправка всех значений  5 расчета */
            L5:L5,
            dskv5:dskv5,
            dn5:dn5,
            dvn5:dvn5,
            dn25:dn25,
            dn25a:dn25a,
            Lybt5:Lybt5,
            pr5:pr5,
            qr5:qr5,
            qr56:qr56,
            ss:ss,
            n5:n5,
            K5:K5,
            vx55:vx55,
            vm5:vm5,
            vkr5:vkr5,
                    }
    });
});
  

     $(".opened").click(function (e) {
    e.preventDefault();
  let 
/* Ввод входных переменных для 5 расчета*/
       L5 = $('input[name="L5"]').val(),
        dskv5 = $('input[name="dskv5"]').val(),
        dn5 = $('input[name="dn5"]').val(),
        dvn5 = $('input[name="dvn5"]').val(),
        dn25 = $('input[name="dn25"]').val(),
        dn25a = $('input[name="dn25a"]').val(),
        Lybt5 = $('input[name="Lybt5"]').val(),
        pr5 = $('input[name="pr5"]').val(),
        qr5 = $('input[name="qr5"]').val(),
        qr56 = $('input[name="qr56"]').val(),
        ss = $('input[name="ss"]').val(),
     /* Формулы для расчета 5 задачи*/
     
nl5 = (qr56/qr5);
nxl = 3.32*nl5;
n5 = (nxl/7.20).toFixed(4);

Kx5 = Math.pow(511,n5);
K5 = (qr5/Kx5).toFixed(3);

vxl = Math.pow(dn5,2);
vxxl = (Math.pow(dskv5,2)-Math.pow(dn5,2));
xlx = vxl/vxxl;
vxx55 = (0.45 + (xlx)).toFixed(3);
vx55 = (vxx55*ss).toFixed(3);

vm5 = (1.5*vx55).toFixed(3);

vkr55 = (12*Math.pow(10,3)*vm5);
vqr5 = (dskv5*1) - (dn5*1);
vqr51 = vkr55/vqr5;
vmkx = (2*(0.809*1)+(1*1));
vmky = (3*0.809);
vmk = vmkx/vmky;
vmkk = vqr51*vmk;
vmk51 = Math.pow(vmkk,0.809);
zxc = 2*Math.pow(10,-3)*K5*L5;
zxc2 = (dskv5*1)-(dn5*1);
zxc1 = zxc/zxc2;
vkr5 = (zxc1*vmk51).toFixed(2);


/*Ввод выходных значений для 5 расчета*/
        n5_text = $('input[name="n5"]'),
        K5_text = $('input[name="K5"]'),
        vx55_text = $('input[name="vx55"]'),
        vm5_text = $('input[name="vm5"]'),
        vkr5_text = $('input[name="vkr5"]'),
       /*Ввод выходных значений для 5 расчета */
       n5_text.val(n5);
       K5_text.val(K5);
       vx55_text.val(vx55);
       vm5_text.val(vm5);
       vkr5_text.val(vkr5);
      $.ajax({
        url: '../../calc_db5.php',
        type: 'POST',
        data: {
            /*Отправка всех значений  5 расчета */
            L5:L5,
            dskv5:dskv5,
            dn5:dn5,
            dvn5:dvn5,
            dn25:dn25,
            dn25a:dn25a,
            Lybt5:Lybt5,
            pr5:pr5,
            qr5:qr5,
            qr56:qr56,
            ss:ss,
            n5:n5,
            K5:K5,
            vx55:vx55,
            vm5:vm5,
            vkr5:vkr5,
                    }
    });
});

$(".demo").click(function () {
let
/*Автозаполнение демо значений для 5 расчета */
  L5_text = $('input[name="L5"]'),
  dskv5_text = $('input[name="dskv5"]'),
  dn5_text = $('input[name="dn5"]');
  dvn5_text = $('input[name="dvn5"]');
  dn25_text = $('input[name="dn25"]');
  dn25a_text = $('input[name="dn25a"]');
  Lybt5_text = $('input[name="Lybt5"]');
  pr5_text = $('input[name="pr5"]');
  qr5_text = $('input[name="qr5"]');
  qr56_text = $('input[name="qr56"]');
  ss_text = $('input[name="ss"]');
  L5_text.val(4572); 
  dskv5_text.val(200);
  dn5_text.val(114);
  dvn5_text.val(97);
  dn25_text.val(159);
  dn25a_text.val(70); 
  Lybt5_text.val(213);
  pr5_text.val(1797);
  qr5_text.val(80);
  qr56_text.val(140);
  ss_text.val(1.37);
  });