$(".calc").click(function (e) {
    e.preventDefault();
  let 
/* Ввод входных переменных для 1 расчета*/
        p = $('input[name="p"]').val(),
        N1 = $('input[name="N1"]').val(),
        N2 = $('input[name="N2"]').val(),
        N3 = $('input[name="N3"]').val(),
        P1 = $('input[name="P1"]').val(),
        P2 = $('input[name="P2"]').val(),
        Pnas1 = $('input[name="Pnas1"]').val(),
        Pns2 = $('input[name="Pns2"]').val(),
        Pma = $('input[name="Pma"]').val(),    
/* Формулы 1 расчета */
    Snas = ((Math.pow(N1,2)+ Math.pow(N2,2) + Math.pow(N3,2))/1.274).toFixed(1);
    P1a = ((0.5 * Math.pow(Pnas1,2) * p) / Math.pow(Snas,2)).toFixed(2);
    P2b = ((0.5 * Math.pow(Pns2,2) * p) / Math.pow(Snas,2)).toFixed(2);
    Pc1z =((P1 - P1a)).toFixed(2);
    Pc2g = ((P2 - P2b)).toFixed(2);
    z = Math.log(Pc1z /Pc2g).toFixed(3);
    c = Math.log(Pnas1/Pns2).toFixed(3);
    M = (z / c);
    b = M + 2;
    a = (2/b);
    Poptz = (a*Pma).toFixed(1);/*!!!!!!!!!!!!!!!!!! */
    Poptg = ((1/(M+1))*Pma).toFixed(2);/*!!!!!!!!!!!!!!!!!! */
    xc = (Poptz/Pma);
    cv= (1 / M);
    Qoptz = (Math.pow(xc,cv)*Pc1z).toFixed(2);
    Qoptg = (Math.pow(Poptg/Pma,1/M)*Pc1z).toFixed(2);
    P1z = ((Pma-Poptz)).toFixed(2);
    P1g = (Pma-Poptg).toFixed(2);/*!!!!!!!!!!!!!!!!!! */
    zt = (0.5*Math.pow(Qoptz,2)*p);
    zty= zt/P1z;
    Snasz = Math.sqrt(zty).toFixed(1);
    Snasg = Math.sqrt((0.5*Math.pow(Qoptg,2)*p)/P1g).toFixed(1);
    Dnasz = Math.sqrt(Snasz/(3*0.785)).toFixed(1);
    Dnasg = Math.sqrt((Snasg)/(3*0.785)).toFixed(1);
    Nnasz = Math.sqrt((Snasz)/(2*0.785)).toFixed(1);
    Nnasg = Math.sqrt((Snasg)/(2*0.785)).toFixed(1);
    
/* Формулы для расчета 5b*/
/*vxl = Math.pow(dn5,2);
vxxl = ((Math.pow(dskv5,2)*1)-(Math.pow(dn5,2)*1) +(dn25a*1);
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
vkr5 = (zxc1*vmk51).toFixed(2);*/


  let
  /*Ввод выходных значений для 1 расчета */
      Snas_text = $('input[name="Snas"]'),
      P1a_text = $('input[name="P1a"]'),
      P2b_text = $('input[name="P2b"]'),
      Pc1z_text = $('input[name="Pc1z"]'),
      Pc2g_text = $('input[name="Pc2g"]'),
      M_text = $('input[name="M"]'),
      b_text = $('input[name="b"]'),
      Poptz_text = $('input[name="Poptz"]'),
      Poptg_text = $('input[name="Poptg"]'),
      Qoptz_text = $('input[name="Qoptz"]'),
      Qoptg_text = $('input[name="Qoptg"]'),
      P1z_text = $('input[name="P1z"]'),
      P1g_text = $('input[name="P1g"]'),
      Snasz_text = $('input[name="Snasz"]'),
      Snasg_text = $('input[name="Snasg"]'),
      Dnasz_text = $('input[name="Dnasz"]'),
      Dnasg_text = $('input[name="Dnasg"]'),
      Nnasz_text = $('input[name="Nnasz"]'),
      Nnasg_text = $('input[name="Nnasg"]');
      /*Ввод выходных значений для 1 расчета */
      Snas_text.val(Snas);
      P1a_text.val(P1a);
      P2b_text.val(P2b);
      Pc1z_text.val(Pc1z);
      Pc2g_text.val(Pc2g);
      M_text.val(M);
      Poptz_text.val(Poptz);
      Poptg_text.val(Poptg);
      Qoptz_text.val(Qoptz);
      Qoptg_text.val(Qoptg);
      P1z_text.val(P1z);
      P1g_text.val(P1g);
      Snasz_text.val(Snasz);
      Snasg_text.val(Snasg);
      Dnasz_text.val(Dnasz);
      Dnasg_text.val(Dnasg);
      Nnasz_text.val(Nnasz);
      Nnasg_text.val(Nnasg); 
      $.ajax({
        url: '../../calc_db.php',
        type: 'POST',
        data: {
            Snas:Snas,
            P1a:P1a,
            P2b:P2b,
            Pc1z:Pc1z,
            Pc2g:Pc2g,
            M:M,
            Poptz:Poptz,
            Poptg:Poptg,
            Qoptz:Qoptz,
            Qoptg:Qoptg,
            P1z:P1z,
            P1g:P1g,
            Snasz:Snasz,
            Snasg:Snasg,
            Dnasz:Dnasz,
            Dnasg:Dnasg,
            Nnasz:Nnasz,
            Nnasg:Nnasg,
            p:p,
            N1:N1,
            N2:N2,
            N3:N3,
            P1:P1,
            P2:P2,
            Pnas1:Pnas1,
            Pns2:Pns2,
            Pma:Pma,    
        }
    });
});



$(".demo").click(function () {
  let 
  /*Автозаполнение демо значений для 1 расчета */
 p_text = $('input[name="p"]'),
 N1_text = $('input[name="N1"]'),
 N2_text = $('input[name="N2"]');
 N3_text = $('input[name="N3"]');
 P1_text = $('input[name="P1"]');
 P2_text = $('input[name="P2"]');
 Pnas1_text = $('input[name="Pnas1"]');
 Pns2_text = $('input[name="Pns2"]');
 Pma_text = $('input[name="Pma"]');
  p_text.val(1557); 
  N1_text.val(12.7);
  N2_text.val(12.7);
  N3_text.val(12.7);
  P1_text.val(23);
  P2_text.val(8.9);
  Pnas1_text.val(26.5);
  Pns2_text.val(17.3);
  Pma_text.val(20);
});

