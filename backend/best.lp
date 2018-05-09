\* Problem: MasterCutStock *\

Minimize
 obj: + x_1 + x_2 + x_3

Subject To
 Width1: + 3 x_3 + 5 x_2 + 2 x_1 >= 30
 Width2: + x_1 >= 12

Bounds
 13 <= x_1 <= 100000
 x_2 = 1
 x_3 = 0

Generals
 x_1
 x_2
 x_3

End
