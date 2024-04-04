import React, { useState } from 'react';
import { TouchableOpacity, StyleSheet, Text, View } from 'react-native';

export default function App() {
  const [layout, setLayout] = useState(100);
  const [isPressed, setIsPressed] = useState(false);

  const handlePressIn = () => {
    setIsPressed(true);
  };

  const handlePressOut = () => {
    setIsPressed(false);
  };
  const handlerLayout = (e) => {
    const { layout } = e.nativeEvent;
    setLayout(layout);
  };

  console.log(layout);

  return (
        // <View style={styles.container} onLayout={handlerLayout}>
    //   <Text style={styles.text}  >Open up App.js to start working on your app!</Text>
    //   <Button title='CLICK ME' />
    //   <StatusBar style="auto" />
    // </View>
    <View style={styles.container}>
      {/* Custom button with border */}

      <TouchableOpacity
        style={[styles.button, isPressed && styles.buttonPressed]}
        onPress={() => console.log('Button pressed!')}
      >
        <Text style={styles.buttonText}>Click Here</Text>
      </TouchableOpacity>
    </View>
  );
}
const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: 'blue',
    alignItems: 'center',
    justifyContent: 'center',
  },
  button: {
    borderWidth: 2,
    borderColor: 'white',
    padding: 10,
    borderRadius: 5,
    backgroundColor: 'transparent',
  },
  buttonPressed: {
    backgroundColor: 'black',
  },
  buttonText: {
    color: 'white',
    fontSize: 18,
    fontWeight: 'bold',
  },
});
