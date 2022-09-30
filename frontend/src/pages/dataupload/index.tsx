import * as XLSX from 'xlsx';
import axios from 'axios';

const Dataupload = () => {
    

    const readUploadFile = (e:any) => {
        e.preventDefault();
        if (e.target.files) {
            const reader = new FileReader();
            reader.onload = (e) => {
                const target : any = e.target;
                const data : any = target.result;
                const workbook = XLSX.read(data, { type: "array" });
                const sheetName = workbook.SheetNames[0];
                const worksheet = workbook.Sheets[sheetName];
                const json = XLSX.utils.sheet_to_json(worksheet);
                const sendData = JSON.stringify(json);
                axios.post('http://127.0.0.1:8000/api/store',sendData)
                    .then(res => {
                        console.log(res);
                        console.log(res.data);
      })
            };
            reader.readAsArrayBuffer(e.target.files[0]);
        }
    }
    
    return (
        <>
        <div className="flex justify-center">
            <div className="mb-3 w-96">
                <label htmlFor="upload" className="form-label inline-block mb-2 text-gray-700">Upload the Attendance sheet</label>
                <input className="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" id="upload" name="upload" onChange={readUploadFile} />
            </div>
        </div>

        {/* <form>
            <label htmlFor="upload">Upload File</label>
                <input
                    type="file"
                    name="upload"
                    id="upload"
                    onChange={readUploadFile}
                />
        </form> */}

        </>
    );
}

export default Dataupload;