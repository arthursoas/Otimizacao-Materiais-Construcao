\* Problem: MasterCutStock *\

Minimize
 obj: + x_1 + x_2 + x_3 + x_4 + x_5 + x_6 + x_7 + x_8 + x_9 + x_10
 + x_11 + x_12

Subject To
 Width1: + 2 x_5 + 3 x_4 + x_3 >= 21
 Width2: + 4 x_10 + x_6 + x_5 + x_3 + x_2 >= 4
 Width3: + 5 x_12 + x_11 + 30 x_9 + 21 x_7 + 22 x_6 + 2 x_5 + x_3 + x_2
 + 3 x_1 >= 50
 Width4: + x_12 + x_11 + x_1 >= 1
 Width5: + x_12 + 4 x_11 + 22 x_8 + 2 x_1 >= 2
 Width6: + x_3 + 2 x_2 >= 7

Generals
 x_1
 x_2
 x_3
 x_4
 x_5
 x_6
 x_7
 x_8
 x_9
 x_10
 x_11
 x_12

End
