\* Problem: MasterCutStock *\

Minimize
 obj: + x_1 + x_2 + x_3 + x_4 + x_5 + x_6 + x_7 + x_8

Subject To
 Width1: + 3 x_2 >= 45
 Width2: + 5 x_4 + 6 x_3 >= 23
 Width3: + 6 x_6 + 8 x_5 + 2 x_4 >= 16
 Width4: + x_1 >= 5
 Width5: + 48 x_8 + 50 x_7 + 14 x_6 + 2 x_5 + 5 x_3 + 5 x_2 + x_1 >= 125

Bounds
 x_3 = 0
 5 <= x_4 <= 100000
 x_5 = 0
 x_7 = 0
 1 <= x_8 <= 100000

Generals
 x_1
 x_2
 x_3
 x_4
 x_5
 x_6
 x_7
 x_8

End
