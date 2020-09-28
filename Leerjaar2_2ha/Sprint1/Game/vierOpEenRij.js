varx = 10;
vary = 80;
vark = 0;

for (i = 1; i < 51; i++){
    lblHok[i] = new Label("",Label.CENTER);
    k = (i - 1) / 5;
    x = 12 + 42 * k;
    y = 70 + 32 * (i - 5 * k);
    lblHok[i].setBounds(x,y,40,30);
    lblHok[i].setFont(new Font ("Dialog", Font.BOLD, 20));
    lblHok[i].setBackground(new Color(255,255,255));
    add(lblHok[i]);
}