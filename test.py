import numpy as np
from keras.models import load_model

from keras.applications.vgg16 import preprocess_input
from keras.preprocessing.image import ImageDataGenerator

model = load_model('model.hdf5')
data_generator = ImageDataGenerator(preprocessing_function=preprocess_input)

test_generator = data_generator.flow_from_directory(
    directory = 'test',
    target_size = (200,150),
    batch_size = 1,
    class_mode = None,
    shuffle = False,
    seed = 123
)

test_generator.reset()

pred = model.predict_generator(test_generator, steps = len(test_generator), verbose = 1)
print(pred)
predicted_class_indices = np.argmax(pred, axis = 1)
print(predicted_class_indices)
label = ['Bacterial leaf blight','Brown spot','Leaf smut']

remedies=["\n1. Use balanced amounts of plant nutrients, especially nitrogen.\
	\n2. Ensure good drainage of fields (in conventionally flooded crops) and nurseries.\
	\n3. Keep fields clean. Remove weed hosts and plow under rice stubble, straw, rice ratoons and volunteer seedlings, which can serve as hosts of bacteria.\
	\n4. Allow fallow fields to dry in order to suppress disease agents in the soil and plant residues.",
	"1. Prune and remove heavily affected leaves\
	\n2. Provide frequent treatment of neem oil or another fungicide to the foliage.\
	\n3. Avoid getting water onto the leaves as it recovers.\
	\n4. Keep the plant away from other plants temporarily.\
	\n5. Monitor daily to ensure the infection has stopped spreading.",
	"1. Use of disease-free seeds that are selected from healthy crop.\
	\n2. Seed treatment with carbendazim 2.0g/kg of seeds.\
	\n3. Control insect pests.\
	\n4. Split application of nitrogen is recommended.\
	\n5. Removal and proper disposal of infected plant debris."]


print(label[predicted_class_indices[0]])


print("Remedies:")
print(remedies[predicted_class_indices[0]])

print("\nAccuracy:",max(pred[0]))


file= open('out.txt','w')
file.write(label[predicted_class_indices[0]]+"\nRemedies for the disease: \n"+remedies[predicted_class_indices[0]])
file.close()

"""
file = open("out.txt","w")
file.write(label[predicted_class_indices[0]])
file.close()

file = open("remedies.txt","w")
file.write(remedies[predicted_class_indices[0]])
file.close()"""