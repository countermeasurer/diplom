$(".calc").click(function (e) {
    e.preventDefault();
  let 
/* Ввод входных переменных для 6 расчета*/
        pr6 = $('input[name="pr6"]').val(),
        plv = $('input[name="plv"]').val(),
        pns = $('input[name="pns"]').val(),
        dskv6 = $('input[name="dskv6"]').val(),
        dn6 = $('input[name="dn6"]').val(),
        sc = $('input[name="sc"]').val(),
        L = $('input[name="L"]').val(),
        dn26 = $('input[name="dn26"]').val(),
        Lybt = $('input[name="Lybt"]').val(),
        glv = $('input[name="glv"]').val(), 
/* Формулы для расчета 6*/
    ax = pns/0.48;
    q36 = (plv*1)+(ax*1);

    q66 = (q36*1)+(plv*1);

    nl = (q36/q66);
    nx6= 3.32*nl;
    n6 = Math.log(nx6).toFixed(4);

    Kx6 = Math.pow(511,n6);
    K6 = (q36/Kx6).toFixed(4);

    xv6 = Math.pow(dskv6,2)- Math.pow(dn6,2);
    xvv6 = 0.000785 * xv6;
    vx66 = (sc/xvv6).toFixed(2);
    vx62 =Math.pow(dskv6,2)-Math.pow(dn26,2); 
    vxx62 = 0.000785 * vx62;
    v62 = (sc/vxx62).toFixed(2);

    ak = 465*Math.pow(10,4)*K6;
    axk = ak/pr6;
    ilt =(2-n6);
    alitt =1/ilt; 
    axkx =Math.pow(axk,alitt)*0.005;

    al = 60.96/(dskv6-dn6);
    alx = 2*(n6*1)+1;
    axl = 3*n6;
    axxl = alx/axl;
    all = al*axxl;
    alq = n6/(2-n6);
    alk = Math.pow(all,alq);

    vkr6 = (axkx*alk).toFixed(3);

    ak2 = 465*Math.pow(10,4)*K6;
    axk2 = ak2/pr6;
    ilt2 =(2-n6);
    alitt2 =1/ilt2;

    axkx2 =Math.pow(axk2,alitt2)*0.005;

    al2 = 60.96/(dskv6-dn26);
    alx2 = 2*(n6*1)+1;
    axl2 = 3*n6;
    axxl2 = alx2/axl2;
    all2 = al2*axxl2;
    alq2 = n6/(2-n6);
    alk2 = Math.pow(all2,alq2);

    vkry6 =(axkx2*alk2).toFixed(2);



    if(vx66 < vkr6) {
    ak = 465*Math.pow(10,4)*K6;
    axk = ak/pr6;
    ilt =(2-n6);
    alitt =1/ilt; 
    axkx =Math.pow(axk,alitt)*0.005;

    al = 60.96/(dskv6-dn6);
    alx = 2*(n6*1)+1;
    axl = 3*n6;
    axxl = alx/axl;
    all = al*axxl;
    alq = n6/(2-n6);
    alk = Math.pow(all,alq);

    vkr6 = (axkx*alk).toFixed(2);
   // Ламинарный режим 
  }
  else {
    vk6 = 12*Math.pow(10,3)*v62;
    vkx = dskv6-dn26;
    vkxx = vk6/vkx;
    alx = 2*(n6*1)+1;
    axl = 3*n6;
    axxl = alx/axl;
    all = al*axxl;
    alq = Math.pow(all,n6);

    al2 = 2* Math.pow(10,-3) * K6*L;
    alxlxl = al2/(dskv6-dn26);
    all2 = al2*alxlxl;
    alq2 = alq*all2;
    vkr6 = (alq2).toFixed(2);
  // Турбулентный режим
  }





  if(v62 > vkry6) {
    ak = 465*Math.pow(10,4)*K6;
    axk = ak/pr6;
    ilt =(2-n6);
    alitt =1/ilt; 
    axkx =Math.pow(axk,alitt)*0.005;

    al = 60.96/(dskv6-dn6);
    alx = 2*(n6*1)+1;
    axl = 3*n6;
    axxl = alx/axl;
    all = al*axxl;
    alq = n6/(2-n6);
    alk = Math.pow(all,alq);

    vkry6 = (axkx*alk).toFixed(2);
   // Ламинарный режим 
  }
  else {
    ak2 = 30.3 * Math.pow(pr6,0.8);
    axk2 = Math.pow(sc,1.8);
    axxk2 = Math.pow(plv,0.2);
    axall = ak2*axk2*axxk2*Lybt;

    ilt2 =dskv6 - dn26;
    illt2 = Math.pow(ilt2,3);
    alitt2 =(dskv6*1) + (dn26*1);
    alitt22 = Math.pow(alitt2,1.8);
    alix = illt2*alitt22;

    vkry6 =(axall/alix).toFixed(2);
  // Турбулентный режим
  }
pekv1 = (vkr6*1)+(vkry6*1);
pekv2 = Math.pow(10,6)*pekv1;
pekv3 = 9.8*glv;
pekv4 = (pekv2/pekv3);
pekv5 = pekv4*1;
pekv = ((pekv5*1) + (pr6*1)).toFixed(2);

        /*Ввод выходных значений для 6 расчета*/
        q36_text = $('input[name="q36"]'),
        q66_text = $('input[name="q66"]'),
        n6_text = $('input[name="n6"]'),
        K6_text = $('input[name="K6"]'),
        vx66_text = $('input[name="vx66"]'),
        v62_text = $('input[name="v62"]'),
        vkr6_text = $('input[name="vkr6"]'),
        vkry6_text = $('input[name="vkry6"]'),
        pekv_text = $('input[name="pekv"]'),
       /*Отправка всех выходных значений  6 расчета */
      q36_text.val(q36);
      q66_text.val(q66);
      n6_text.val(n6);
      K6_text.val(K6);
      vx66_text.val(vx66);
      v62_text.val(v62);
      vkr6_text.val(vkr6);
      vkry6_text.val(vkry6);
      pekv_text.val(pekv);
      $.ajax({
        url: '../../calc_db6.php',
        type: 'POST',
        data: {
            
       /*Отправка всех значений  6 расчета */
            pr6:pr6, 
            plv:plv, 
            pns:pns,
            dskv6:dskv6,
            dn6:dn6,
            sc:sc,
            L:L,
            dn26:dn26, 
            Lybt:Lybt,
            glv:glv,
            q36:q36,
            q66:q66,
            n6:n6,
            K6:K6,
            vx66:vx66,
            v62:v62,
            vkr6:vkr6,
            vkry6:vkry6,
            pekv:pekv,
                    }
    });
});

$(".demo").click(function () {
  let 
  /*Автозаполнение демо значений для 6 расчета */
  pr6_text = $('input[name="pr6"]'),
  plv_text = $('input[name="plv"]'),
  pns_text = $('input[name="pns"]');
  dskv6_text = $('input[name="dskv6"]');
  dn6_text = $('input[name="dn6"]');
  sc_text = $('input[name="sc"]');
  L_text = $('input[name="L"]');
  dn26_text = $('input[name="dn26"]');
  Lybt_text = $('input[name="Lybt"]');
  glv_text = $('input[name="glv"]');
  pr6_text.val(1498); 
  plv_text.val(24);
  pns_text.val(5.76);
  dskv6_text.val(216);
  dn6_text.val(127);
  sc_text.val(25.2); 
  L_text.val(3444);
  dn26_text.val(165);
  Lybt_text.val(213);
  glv_text.val(3658);
  });