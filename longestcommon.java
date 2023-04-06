import java.util.*;
  public class Main {
      public static void main(String[] args) {
          String[] strs = {
              "flowr",
              "flow",
              "flight"
          };
          int l = strs.length;
          // its to sort alphabet order
          Arrays.sort(strs);
          //a is assume 0 index of array and b is assume last index of array
          String a = strs[0];
          String b = strs[l - 1];
          int j = 0;
          for (int i = 0; i < a.length(); i++) {
              if (a.charAt(i) == b.charAt(i)) {
                  j = j + 1;
              } else {
                  break;
              }
          }
          // Using substring to print longest common Prefix
          System.out.println(a.substring(0, j));
      }
  }