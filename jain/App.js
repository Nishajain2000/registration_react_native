import React from 'react';
import { StyleSheet, Text, View } from 'react-native';
import {WebView} from 'react-native-webview';

export default function App() {
  return (
    <WebView source={{uri:'http:/192.168.0.139/react/index.php'}}/>
    
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 5,
    backgroundColor: '#ce93d8',
    alignItems: 'center',
    justifyContent: 'flex-start',

  },
});
