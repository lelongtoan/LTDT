import 'package:doan/screens/chi_tiet_san_pham/details_screen.dart';
import 'package:doan/screens/complete_profile/complete_profile_screen.dart';
import 'package:doan/screens/dang_ky/sign_up_screen.dart';
import 'package:doan/screens/dang_nhap/sign_in_screen.dart';
import 'package:doan/screens/dang_nhap_thanh_cong/login_sucess_screen.dart';
import 'package:doan/screens/gio_hang/cart_screen.dart';
import 'package:doan/screens/quen_mat_khau/forgot_password_screen.dart';
import 'package:doan/screens/thong_tin_ca_nhan/profile_screen.dart';
import 'package:doan/screens/trangchinh/home_screen.dart';
import 'package:flutter/widgets.dart';
import 'package:doan/screens/splash/splash_screen.dart';
import 'package:doan/screens/dang_nhap/sign_in_screen.dart';

final Map<String, WidgetBuilder> routes = {
  SplashScreen.routeName: (context) => SplashScreen(),
  SignInScreen.routeName: (context) => SignInScreen(),
  ForgotPasswordScreen.routeName: (context) => ForgotPasswordScreen(),
  LoginSuccessScreen.routeName: (context) => LoginSuccessScreen(),
  SignUpscreen.routeName: (context) => SignUpscreen(),
  CompleteProfileScreen.routeName: (context) => CompleteProfileScreen(),
  HomeScreen.routeName: (context) => HomeScreen(),
  DetailsScreen.routeName: (context) => DetailsScreen(),
  CartScreen.routeName: (context) => CartScreen(),
  ProfileScreen.routeName: (context) => ProfileScreen(),
};
